<?php

session_start();
if (!$_SESSION['user_login_status']){
	header("Location: login.php");
	exit;
}

// include the configs / constants for the database connection
define('__ROOT__', dirname(__FILE__));
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

	//Delete file from DB if delete button is clicked
	if (isset($_POST["delete"])) {
		$file_to_delete = $_POST["id"];
		$sql = "UPDATE files SET deleted=1 WHERE file_id='$file_to_delete'";
		$query_delete_file = $db_connection->query($sql) or die($db_connection->error);
	}
	
	//Delete order from DB if "delete order" button is clicked
	if (isset($_POST["paid"])) {
		$file_id = $_POST["id"];
		$payment_state = $_POST["state"];
		$changed_payment_state = ($payment_state ? 0 : 1);
		$sql = "UPDATE invoices SET payed='$changed_payment_state' WHERE file_id='$file_id'";
		$query_update_invoice = $db_connection->query($sql) or die($db_connection->error);
	}
	
	$_SESSION['files'] = array();
	$user_id = $_SESSION['user_id'];
	$sql = "SELECT files.file_id,original_name,files.user_id,files.company_name,files.timestamp as filetime,size,processed,sum,currency,payed,date,due_date,date_start,date_end,invoices.timestamp as processtimes 
			FROM files LEFT JOIN invoices 
			ON files.file_id=invoices.file_id 
			WHERE files.user_id='$user_id' AND files.deleted=0";
	$query_find_all_files = $db_connection->query($sql) or die($db_connection->error);
} else {
	echo "Error - No database connection.";
}

?>

<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>Pooled Admin Panel Category Flat Bootstrap Responsive Web Template | Home :: w3layouts</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Pooled Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
<style>
.four-grid {
	cursor:pointer;
}
.four-agileits {
	height:10em;
	background-color: #ffffff;
	background-size: contain;
	background-repeat: no-repeat;
	background-position: center center;
}
.profile_details_left h1 a{
	color: #fff;
	text-transform: uppercase;
	display: inline-block;
	margin: 0;
	//font-size: 35px;
}
</style>
</head> 
<body>
	<div class="page-container">
   <!--/content-inner-->
		<div class="left-content">
			<div class="mother-grid-inner">
             <!--header start here-->
				<div class="header-main">
					<div class="logo-w3-agile">
						:כתובת המייל שלך
						<br>
						<?php echo $_SESSION['user_name']; ?>@myhomii.com
					</div>
					<div class="w3layouts-right" style="padding: 0em 1em 0.1em;">
						<div class="profile_details_left"><!--notifications of menu start -->
							<h1><a href="homepage.php">MyHomii</a></h1>
							<div class="clearfix"> </div>
						</div>
						<!--notification menu end -->
						
						<div class="clearfix"> </div>				
					</div>
					<div class="profile_details w3l">		
						<ul>
							<li class="dropdown profile_details_drop">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
									<div class="profile_img">	
										<span class="prfil-img"><img src="images/in4.jpg" alt="" style="visibility: hidden;"> </span>
										<div class="user-name" style="direction:rtl">
												<p style="margin-top: 25%;">אפשרויות</p>
												<!--<span>Administrator</span>-->
										</div>
										<i class="fa fa-angle-down"></i>
										<i class="fa fa-angle-up"></i>
										<div class="clearfix"></div>	
									</div>	
								</a>
								<ul class="dropdown-menu drp-mnu">
									<li> <a href="#"><i class="fa fa-cog"></i> Settings</a> </li> 
									<li> <a href="#"><i class="fa fa-user"></i> Profile</a> </li> 
									<li> <a href="login.php?logout"><i class="fa fa-sign-out"></i> Logout</a> </li>
								</ul>
							</li>
						</ul>
					</div>
							
				     <div class="clearfix"> </div>	
				</div>
				

				<!--agileinfo-grap-->
				<div class="grid-form">
					<div class="grid-form1" style="direction:rtl;text-align:center;">
						<h2 id="forms-example" class="">החשבוניות שלך</h2>
						<!--<p>כאן יהיה מדריך מפורט לפי חברה שמסביר איך מבקשים לשלוח חשבוניות למייל שהנפקנו</p>-->
					</div>
				</div>
				<!--//agileinfo-grap-->
				
				<!--agileinfo-grap-->
				<div class="grid-form">
					<div class="grid-form1" style="direction:rtl;">
						<table class="table">
							<!--<thead>
								<tr>
									<th>מחיקה</th>
									<th>חברה</th>
									<th>תאריך</th>
									<th>סה"כ</th>
									<th>תשלום</th>
									<th>לינק לצפייה</th>
								</tr>
							</thead>-->
							<tbody>
				<?php
				while (null !== ($rowFiles = $query_find_all_files->fetch_assoc())){
					$sum=$currency=$paid=$due_date=$date=$date_start=$date_end=$data = "";
					$file_id = $rowFiles["file_id"];
					$company_name = $rowFiles["company_name"];
					$timestamp_file_saved = $rowFiles["filetime"];
					$time_file_saved = date("j/n/y", $timestamp_file_saved);
					$_SESSION['files'][] = $file_id;
					$color = "";
					$processed = $rowFiles["processed"];
					if($processed){
						$sum = number_format($rowFiles["sum"], 2, '.', ',');
						$currency = $rowFiles["currency"];
						$paid = $rowFiles["payed"];
						if (!$paid){
							$due_date = $rowFiles["due_date"];
							if ($due_date == "0000-00-00"){
								$due_date = NULL;
							}
							if ($due_date != NULL){
								$due_date = DateTime::createFromFormat('Y-m-d', $due_date)->format('d-m-Y');
							}
						}
						$date = $rowFiles["date"];
						if ($date == "0000-00-00"){
							$date = NULL;
						}
						if ($date != NULL){
							$date = DateTime::createFromFormat('Y-m-d', $date)->format('d-m-Y');
						} else {
							$date = "";
						}
						$date_start = $rowFiles["date_start"];
						if ($date_start == "0000-00-00"){
							$date_start = NULL;
						}
						if ($date_start != NULL){
							$date_start = DateTime::createFromFormat('Y-m-d', $date_start)->format('d-m-Y');
						}
						$date_end = $rowFiles["date_end"];
						if ($date_end == "0000-00-00"){
							$date_end = NULL;
						}
						if ($date_end != NULL){
							$date_end = DateTime::createFromFormat('Y-m-d', $date_end)->format('d-m-Y');
						}
												
						$color = ($paid ? "success" : "danger");
						$data .= $sum." ".$currency;
						if ($paid){
							$data .= "<br>(שולם)";
						} else if ($due_date != NULL) {
							$data .= "<br>(תאריך אחרון לתשלום: ".$due_date.")";
						}
						/*if ($date_start != NULL && $date_end != NULL){
							$data .= "<br>"."עבור שירות מתאריך ".$date_start." ועד תאריך ".$date_end;
						}*/
						
					}
			
				?>
							<tr class="<?php echo $color; ?>">
								<td>
									<form method="post" action="report.php" id="delete" style="margin: 0 0;">
										<input type="hidden" name="id" value="<?php echo $file_id; ?>">
										<button type="submit" class="btn btn-default" name="delete" onclick="return confirm('למחוק לצמיתות חשבונית זו?')"><span class="glyphicon glyphicon-remove"></span></button>
									</form>
								</td>
								<td><?php echo $company_name; ?></td>
								<td><?php echo $date; ?></td>
								<td><?php echo $data; ?></td>
								<td><a href="https://myhomii.com/system/showPDF.php?i=<?php echo $file_id; ?>" target="_blank">לצפייה בחשבונית</a></td>
								<td>
									<?php
									if ($processed){ ?>
									<form method="post" action="report.php" id="paid" style="margin: 0 0;">
										<input type="hidden" name="id" value="<?php echo $file_id; ?>">
										<input type="hidden" name="state" value="<?php echo $paid; ?>">
										<button type="submit" class="btn btn-primary" name="paid"><?php echo ($paid ? "עדכון תשלום" : "עדכון תשלום"); ?></button>
									</form>
									<?php
									} ?>
								</td>
							</tr>
											
				<?php
					}
				?>
				
							</tbody>
						</table>
					</div>
				</div>
	
<!-- script-for sticky-nav -->
		<script>
		$(document).ready(function() {
			 var navoffeset=$(".header-main").offset().top;
			 $(window).scroll(function(){
				var scrollpos=$(window).scrollTop(); 
				if(scrollpos >=navoffeset){
					$(".header-main").addClass("fixed");
				}else{
					$(".header-main").removeClass("fixed");
				}
			 });
			 
		});
		</script>
		<!-- /script-for sticky-nav -->
<!--inner block start here-->
<div class="inner-block">

</div>
<!--inner block end here-->
<!--copy rights start here-->
<div class="copyrights">
	 <p>© 2016 Pooled. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div>	
<!--COPY rights end here-->
</div>
</div>
  <!--//content-inner-->
			<!--/sidebar-menu-->
				
							  <div class="clearfix"></div>		
							</div>

<!--js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
   <script src="js/bootstrap.min.js"></script>
   <!-- /Bootstrap Core JavaScript -->	   
<!-- morris JavaScript -->	
<script src="js/raphael-min.js"></script>
<script src="js/morris.js"></script>

</body>
</html>