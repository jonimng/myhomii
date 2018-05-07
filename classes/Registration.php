<?php

/**
 * Class registration
 * handles the user registration
 */
class Registration
{
    /**
     * @var object $db_connection The database connection
     */
    private $db_connection = null;
    /**
     * @var array $errors Collection of error messages
     */
    public $errors = array();
    /**
     * @var array $messages Collection of success / neutral messages
     */
    public $messages = array();

    /**
     * the function "__construct()" automatically starts whenever an object of this class is created,
     * you know, when you do "$registration = new Registration();"
     */
    public function __construct()
    {
        if (isset($_POST["register"])) {
            $this->registerNewUser();
        }
    }

    /**
     * handles the entire registration process. checks all error possibilities
     * and creates a new user in the database if everything is fine
     */
    private function registerNewUser()
    {
        if (empty($_POST['user_name'])) {
            $this->errors[] = "Empty Username";
        } elseif (empty($_POST['user_password_new']) || empty($_POST['user_password_repeat'])) {
            $this->errors[] = "Empty Password";
        } elseif ($_POST['user_password_new'] !== $_POST['user_password_repeat']) {
            $this->errors[] = "Password and password repeat are not the same";
        } elseif (strlen($_POST['user_password_new']) < 6) {
            $this->errors[] = "Password has a minimum length of 6 characters";
        } elseif (strlen($_POST['user_name']) > 64 || strlen($_POST['user_name']) < 2) {
            $this->errors[] = "Username cannot be shorter than 2 or longer than 64 characters";
        //} elseif (!preg_match('/^[a-z\d]{2,64}$/i', $_POST['user_name'])) {
        //    $this->errors[] = "Username does not fit the name scheme: only a-Z and numbers are allowed, 2 to 64 characters";
        } elseif (empty($_POST['user_email'])) {
            $this->errors[] = "Email cannot be empty";
        } elseif (strlen($_POST['user_email']) > 64) {
            $this->errors[] = "Email cannot be longer than 64 characters";
        } elseif (!filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)) {
            $this->errors[] = "Your email address is not in a valid email format";
        } elseif (!empty($_POST['user_name'])
            && strlen($_POST['user_name']) <= 64
            && strlen($_POST['user_name']) >= 2
            //&& preg_match('/^[a-z\d]{2,64}$/i', $_POST['user_name'])
            && !empty($_POST['user_email'])
            && strlen($_POST['user_email']) <= 64
            && filter_var($_POST['user_email'], FILTER_VALIDATE_EMAIL)
            && !empty($_POST['user_password_new'])
            && !empty($_POST['user_password_repeat'])
            && ($_POST['user_password_new'] === $_POST['user_password_repeat'])
        ) {
            // create a database connection
            $this->db_connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);

            // change character set to utf8 and check it
            if (!$this->db_connection->set_charset("utf8")) {
                $this->errors[] = $this->db_connection->error;
            }

            // if no connection errors (= working database connection)
            if (!$this->db_connection->connect_errno) {

                // escaping, additionally removing everything that could be (html/javascript-) code
                $user_name = $this->db_connection->real_escape_string(strip_tags($_POST['user_name'], ENT_QUOTES));
                $user_email = $this->db_connection->real_escape_string(strip_tags($_POST['user_email'], ENT_QUOTES));

                $user_password = $_POST['user_password_new'];
				$user_phone = $_POST['user_phone'];
				$user_city = $_POST['user_city'];
				$TOU = $_POST['TOU'];

                // crypt the user's password with PHP 5.5's password_hash() function, results in a 60 character
                // hash string. the PASSWORD_DEFAULT constant is defined by the PHP 5.5, or if you are using
                // PHP 5.3/5.4, by the password hashing compatibility library
                $user_password_hash = password_hash($user_password, PASSWORD_DEFAULT);

                // check if user or email address already exists
                $sql = "SELECT * FROM users WHERE user_name = '" . $user_name . "' OR user_email = '" . $user_email . "';";
                $query_check_user_name = $this->db_connection->query($sql);

                if ($query_check_user_name->num_rows == 1) {
                    $this->errors[] = "Sorry, that username / email address is already taken.";
                } else {
                    // write new user's data into database
                    $sql = "INSERT INTO users (user_name, user_password_hash, user_email, user_phone, user_city)
                            VALUES('" . $user_name . "', '" . $user_password_hash . "', '" . $user_email . "', '" . $user_phone . "', '" . $user_city . "');";
                    $query_new_user_insert = $this->db_connection->query($sql);

                    // if user has been added successfully
                    if ($query_new_user_insert) {
                        //$this->messages[] = "Your account has been created successfully. You can now log in.";
						//Create email account
						include("xmlapi.php");        //XMLAPI cpanel client class

						$ip = "127.0.0.1";            // should be server IP address or 127.0.0.1 if local server
						$account = "**";        // cpanel user account name
						$passwd ="**";          // cpanel user password
						$port =2083;                  // cpanel secure authentication port unsecure port# 2082
						$email_domain = "myhomii.com";
						$email_user = $user_name;
						$email_pass = "&4TQ&mo1gdwA";
						$email_quota = 500;             // 0 is no quota, or set a number in mb

						$xmlapi = new xmlapi($ip);
						$xmlapi->set_port($port);     //set port number.
						$xmlapi->password_auth($account, $passwd);
						$xmlapi->set_debug(0);        //output to error file  set to 1 to see error_log.

						$call = array(domain=>$email_domain, email=>$email_user, password=>$email_pass, quota=>$email_quota);

						$result = $xmlapi->api2_query($account, "Email", "addpop", $call );

						//print_r($result);            //show the result of your query
						//Take user to login
						header("Location: login.html?m=1");
						exit;
                    } else {
                        $this->errors[] = "Sorry, your registration failed. Please go back and try again.";
                    }
                }
            } else {
                $this->errors[] = "Sorry, no database connection.";
            }
        } else {
            $this->errors[] = "An unknown error occurred.";
        }
    }
}
