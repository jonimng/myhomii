<?php
// show potential errors / feedback (from registration object)
if (isset($registration)) {
    if ($registration->errors) {
        foreach ($registration->errors as $error) {
            echo "<script>alert('".$error."')</script>";
        }
    }
    if ($registration->messages) {
        foreach ($registration->messages as $message) {
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
	<title>MyHomii | הרשמה</title>
	
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
	<!-- jQuery -->
	<script src="logReg/js/jquery-2.1.4.min.js"></script>
	<!-- //jQuery -->
	
	<link href="//fonts.googleapis.com/css?family=Poiret+One" rel="stylesheet">
	
</head>
<body>

	<h1>Homee</h1>

	<div class="main-w3">
		<form action="register.php" method="post" name="registerform">
			<h2><!--<span class="fa fa-user t-w3" aria-hidden="true"></span>-->&nbsp;</h2>
			 <div class="login-w3ls">
				<div class="icons">
					<input type="text" name="user_name" id="user_name" placeholder="שם משתמש*" required="" style="direction:rtl;"  title="באורך 4 תווים לפחות. תווים באנגלית, מספרים וקו תחתון">
					<span class="fa fa-user" id="user_name_check" aria-hidden="true" style="background:red;"></span>
					<div class="clear"></div> 
				</div>
				<div class="icons">	 
					<input type="email" name="user_email" placeholder="דואר אלקטרוני*" required="" style="direction:rtl;">
					<span class="fa fa-envelope" aria-hidden="true"></span>
					<div class="clear"></div>
				</div>
				<div class="icons">	 
					<input type="text" name="user_phone" placeholder="טלפון סלולרי" style="direction:rtl;">
					<span class="fa fa-mobile" aria-hidden="true"></span>
					<div class="clear"></div>
				</div>
				<div class="icons">	 
					<input type="text" name="user_city" placeholder="עיר" style="direction:rtl;">
					<span class="fa fa-university" aria-hidden="true"></span>
					<div class="clear"></div>
				</div>
				<div class="icons">
					<input type="password" name="user_password_new" placeholder="ססמה*" required="" style="direction:rtl;">
					<span class="fa fa-key" aria-hidden="true"></span>
					<div class="clear"></div>
				</div>
				<div class="icons">
					<input type="password" name="user_password_repeat" placeholder="וידוא ססמה*" required="" style="direction:rtl;">
					<span class="fa fa-key" aria-hidden="true"></span>
					<div class="clear"></div>
				</div>
				<div style="direction:rtl;color:white;">
					<input type="checkbox" name="TOU" id="TOU" value="agree"> אני מסכים/ה לתנאי השימוש באתר
				</div>
				<div class="btnn">
					<button type="submit" name="register" id="register">הרשמה</button><br>
					<!-- backlink -->
					<a href="login.php" class="for">התחברות</a>
				</div>	
			 </div>
		</form>
	</div> 

    <div class="copy">
		<p>&copy;2017 Jolly Login Form. All Rights Reserved | Design by <a href="http://www.W3Layouts.com" target="_blank">W3Layouts</a>
	</div>
	
	<script>
	$(document).ready(function(){
		
		var username_isValid = false;
		
		//check username
		$( "#user_name" ).on("keyup",function() {
			var temp_username = this.value;
			$.ajax({
				method: "POST",
				url: "logReg/checkusername.php",
				data: { username:  temp_username},
				success: function(check){
					if (check[0]=="1"){
						//not exist
						username_isValid = true;
						$('#user_name_check').css("background","green");
					} else {
						//exist
						username_isValid = false;
						$('#user_name_check').css("background","red");
					}
				}
			});	
		});
		
		$("#register").on('click', function(e) {
			if(!username_isValid) {
			  e.preventDefault(); //prevent the default action
			  $("html, body").animate({ scrollTop: 0 }, "slow");
			}
			if(!$("#TOU").is(":checked")) {
			  e.preventDefault(); //prevent the default action
			  alert("Please confirm you read the terms of use");
			}
		});
	});
	</script>
	
</body>
</html>