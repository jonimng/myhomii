<?php
// show potential errors / feedback (from login object)
if (isset($login)) {
    if ($login->errors) {
        foreach ($login->errors as $error) {
            echo "<script>alert('".$error."')</script>";
        }
    }
    if ($login->messages) {
        foreach ($login->messages as $message) {
            echo "<script>alert('".$message."')</script>";
        }
    }
}
?>

<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Homee</title>
	
	<!--stylesheets-->
	<link href="logReg/css/login_style.css" rel='stylesheet' type='text/css' media="all">
	<!--//style sheet end here-->
	
	<!-- Meta tags -->
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="keywords" content="Jolly Login Form Responsive Widget, Audio and Video players, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
	<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- Meta tags -->
	
	<!-- font-awesome icons -->
   <link rel="stylesheet" href="logReg/css/font-awesome.min.css" />
	<!-- //font-awesome icons -->

	<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
</head>
<body>

	<h1>Homee</h1>

	<div class="main-w3">
		<form action="login.php" method="post" name="loginform">
			<h2><!--<span class="fa fa-user t-w3" aria-hidden="true"></span>-->&nbsp;</h2>
			 <div class="login-w3ls">
				<div class="icons">	 
					<input type="text" name="user_name" placeholder="שם משתמש" required="" style="direction:rtl;">
					<span class="fa fa-user" aria-hidden="true"></span>
					<div class="clear"></div> 
				</div> 		   
				<div class="icons">		
					<input type="password" name="user_password" placeholder="ססמה" required="" style="direction:rtl;">
					<span class="fa fa-key" aria-hidden="true"></span>
					<div class="clear"></div>
				</div>
				<div class="btnn">
					<!--<input type="checkbox" class="checked"><span class="span">זכור אותי</span><br>-->
					<button type="submit" name="login">התחברות</button><br>
					<a href="#" class="for" >?שכחת ססמה</a><br>
					<a href="register.php" class="for">?עדיין לא נרשמת</a>
				</div>	
			 </div>
		</form>
	</div> 

    <div class="copy">
		<p>&copy;2017 Jolly Login Form. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
	</div>
	
</body>
</html>