<?php

session_start();
if (!$_SESSION['user_login_status']){
	header("Location: login.php");
	exit;
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
					<div class="grid-form1" style="direction:rtl">
						<h2 id="forms-example" class="">מדריך לבקשת שליחה במייל</h2>
						<p>כאן יהיה מדריך מפורט לפי חברה שמסביר איך מבקשים לשלוח חשבוניות למייל שהנפקנו</p>
					</div>
				</div>
				<!--//agileinfo-grap-->
	
				<!--four-grids here-->
				<div class="four-grids">
					<div class="col-md-3 four-grid" onclick="window.location.href = '#hot';">
						<div class="four-agileits" style="background-image: url('https://upload.wikimedia.org/wikipedia/he/thumb/0/0f/Hotlogo.svg/732px-Hotlogo.svg.png');">
							<!--<div class="four-text">
								<h3>לוח שנה</h3>
							</div>-->
						</div>
					</div>
					<div class="col-md-3 four-grid" onclick="window.location.href = '#iec';">
						<div class="four-agileits" style="background-image: url('https://upload.wikimedia.org/wikipedia/he/thumb/1/1f/IsraelElectric.svg/1200px-IsraelElectric.svg.png');">
						</div>
					</div>
					<div class="col-md-3 four-grid" onclick="window.location.href = '#bezeq';">
						<div class="four-agileits" style="background-image: url('https://upload.wikimedia.org/wikipedia/he/3/3f/Bezeq_logo.svg');">
						</div>
					</div>
					<div class="col-md-3 four-grid" onclick="window.location.href = '#yes';">
						<div class="four-agileits" style="background-image: url('https://upload.wikimedia.org/wikipedia/he/thumb/2/28/Yes_logo_2017.svg/800px-Yes_logo_2017.svg.png');">
						</div>
					</div>
					<div class="clearfix"></div>
				</div>
				<!--//four-grids here-->
				
				<!--agileinfo-grap-->
				<div class="grid-form">
					<div class="grid-form1" style="direction:rtl">
						<h3 id="yes" class="">YES</h3>
						<p>בלה בלה בלה</p>
					</div>
				</div>
				<!--//agileinfo-grap-->
				
				<!--agileinfo-grap-->
				<div class="grid-form">
					<div class="grid-form1" style="direction:rtl">
						<h3 id="bezeq" class="">בזק</h3>
						<p>בלה בלה בלה</p>
					</div>
				</div>
				<!--//agileinfo-grap-->
				
				<!--agileinfo-grap-->
				<div class="grid-form">
					<div class="grid-form1" style="direction:rtl">
						<h3 id="iec" class="">חברת החשמל</h3>
						<p>בלה בלה בלה</p>
					</div>
				</div>
				<!--//agileinfo-grap-->
				
				<!--agileinfo-grap-->
				<div class="grid-form">
					<div class="grid-form1" style="direction:rtl">
						<h3 id="hot" class="">HOT</h3>
						<p>בלה בלה בלה</p>
					</div>
				</div>
				<!--//agileinfo-grap-->
	
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