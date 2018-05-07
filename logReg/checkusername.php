<?php

// include the configs / constants for the database connection
define('__ROOT__', dirname(dirname(__FILE__)));
require_once(__ROOT__.'/config/db.php'); 

$db_connection = null;

// create a database connection
$db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

// change character set to utf8 and check it
if (!$db_connection->set_charset("utf8")) {
	echo "Error";
	exit;
}

// if no connection errors (= working database connection)
if (!$db_connection->connect_errno) {
			
	// escaping, additionally removing everything that could be (html/javascript-) code
    $username = $db_connection->real_escape_string(strip_tags($_POST['username'], ENT_QUOTES));

	//Only English letters, numbers and underline
	//At least 4 characters
	if (!preg_match('/^[a-zA-Z_\d]{4,}$/i', $username)){
		echo "0";
		exit;
	}
	
	//Forbidden usernames and passwords
	$forbiddenusernames = array("ADMINISTRATOR", "Administrator", "administrator", "ADMIN", "Admin", "admin");
	if (in_array($username,$forbiddenusernames)){
		echo "0";
		exit;
	}
	
	//Check if user exists
	$sql = "SELECT * FROM users WHERE user_name = '" . $username . "';";
	$query_check_user_name = $db_connection->query($sql);
	if ($query_check_user_name->num_rows == 1) {
		echo "0";
	} else {
		echo "1";
	}

} else {
	echo "No database connection.";
}


?>