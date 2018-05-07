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
<!-- Custom CSS -->
<link href="css/yonish.css" rel="stylesheet">
<!-- RTL FIX CSS -->
<link href="css/bootstrap-rtl.css" rel="stylesheet">
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
						<?php echo $_SESSION['user_name']; ?>@bills.kizihost.website
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
				<!--<div class="grid-form">
					<div class="grid-form1" style="direction:rtl">
						<h2 id="forms-example" class="">הוספה ידנית של הוצאה/הכנסה</h2>
						<p>כאן יהיה מדריך מפורט לפי חברה שמסביר איך מבקשים לשלוח חשבוניות למייל שהנפקנו</p>
					</div>
				</div>
				<!--//agileinfo-grap-->
				
				<div class="grid-form">
					<div class="grid-form1">
						<h3>הוספה ידנית של הוצאה/הכנסה</h3>
						<br><br>
						<div class="tab-content">
							<div class="tab-pane active" id="horizontal-form">
								<form class="form-horizontal">
									<div class="form-group">
										<label for="focusedinput" class="col-sm-2 control-label">Focused Input</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" id="focusedinput" placeholder="Default Input">
										</div>
										<div class="col-sm-2">
											<p class="help-block">Your help text!</p>
										</div>
									</div>
									<div class="form-group">
										<label for="disabledinput" class="col-sm-2 control-label">Disabled Input</label>
										<div class="col-sm-8">
											<input disabled="" type="text" class="form-control1" id="disabledinput" placeholder="Disabled Input">
										</div>
									</div>
									<div class="form-group">
										<label for="inputPassword" class="col-sm-2 control-label">Password</label>
										<div class="col-sm-8">
											<input type="password" class="form-control1" id="inputPassword" placeholder="Password">
										</div>
									</div>
									<div class="form-group">
										<label for="checkbox" class="col-sm-2 control-label">Checkbox</label>
										<div class="col-sm-8">
											<div class="checkbox-inline1"><label><input type="checkbox"> Unchecked</label></div>
											<div class="checkbox-inline1"><label><input type="checkbox" checked=""> Checked</label></div>
											<div class="checkbox-inline1"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
											<div class="checkbox-inline1"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
										</div>
									</div>
									<div class="form-group">
										<label for="checkbox" class="col-sm-2 control-label">Checkbox Inline</label>
										<div class="col-sm-8">
											<div class="checkbox-inline"><label><input type="checkbox"> Unchecked</label></div>
											<div class="checkbox-inline"><label><input type="checkbox" checked=""> Checked</label></div>
											<div class="checkbox-inline"><label><input type="checkbox" disabled=""> Disabled Unchecked</label></div>
											<div class="checkbox-inline"><label><input type="checkbox" disabled="" checked=""> Disabled Checked</label></div>
										</div>
									</div>
									<div class="form-group">
										<label for="selector1" class="col-sm-2 control-label">Dropdown Select</label>
										<div class="col-sm-8"><select name="selector1" id="selector1" class="form-control1">
											<option>Lorem ipsum dolor sit amet.</option>
											<option>Dolore, ab unde modi est!</option>
											<option>Illum, fuga minus sit eaque.</option>
											<option>Consequatur ducimus maiores voluptatum minima.</option>
										</select></div>
									</div>
									<div class="form-group">
										<label class="col-sm-2 control-label">Multiple Select</label>
										<div class="col-sm-8">
											<select multiple="" class="form-control1">
												<option>Option 1</option>
												<option>Option 2</option>
												<option>Option 3</option>
												<option>Option 4</option>
												<option>Option 5</option>
											</select>
										</div>
									</div>
									<div class="form-group">
										<label for="txtarea1" class="col-sm-2 control-label">Textarea</label>
										<div class="col-sm-8"><textarea name="txtarea1" id="txtarea1" cols="50" rows="4" class="form-control1"></textarea></div>
									</div>
									<div class="form-group">
										<label for="radio" class="col-sm-2 control-label">Radio</label>
										<div class="col-sm-8">
											<div class="radio block"><label><input type="radio"> Unchecked</label></div>
											<div class="radio block"><label><input type="radio" checked=""> Checked</label></div>
											<div class="radio block"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
											<div class="radio block"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>
										</div>
									</div>
									<div class="form-group">
										<label for="radio" class="col-sm-2 control-label">Radio Inline</label>
										<div class="col-sm-8">
											<div class="radio-inline"><label><input type="radio"> Unchecked</label></div>
											<div class="radio-inline"><label><input type="radio" checked=""> Checked</label></div>
											<div class="radio-inline"><label><input type="radio" disabled=""> Disabled Unchecked</label></div>
											<div class="radio-inline"><label><input type="radio" disabled="" checked=""> Disabled Checked</label></div>
										</div>
									</div>
									<div class="form-group">
										<label for="smallinput" class="col-sm-2 control-label label-input-sm">Small Input</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1 input-sm" id="smallinput" placeholder="Small Input">
										</div>
									</div>
									<div class="form-group">
										<label for="mediuminput" class="col-sm-2 control-label">Medium Input</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1" id="mediuminput" placeholder="Medium Input">
										</div>
									</div>
									<div class="form-group mb-n">
										<label for="largeinput" class="col-sm-2 control-label label-input-lg">Large Input</label>
										<div class="col-sm-8">
											<input type="text" class="form-control1 input-lg" id="largeinput" placeholder="Large Input">
										</div>
									</div>
								</form>
							</div>
						</div>
								
								
						<div class="bs-example" data-example-id="form-validation-states">
							<form>
							  <div class="form-group has-success">
								<label class="control-label" for="inputSuccess1">Input with success</label>
								<input type="text" class="form-control1" id="inputSuccess1">
							  </div>
							  <div class="form-group has-warning">
								<label class="control-label" for="inputWarning1">Input with warning</label>
								<input type="text" class="form-control1" id="inputWarning1">
							  </div>
							  <div class="form-group has-error">
								<label class="control-label" for="inputError1">Input with error</label>
								<input type="text" class="form-control1" id="inputError1">
							  </div>
							</form>
						</div>
						
						
						<div class="panel-body">
							<form role="form" class="form-horizontal">
								<div class="form-group">
									<label class="col-md-2 control-label">Email Address</label>
									<div class="col-md-8">
										<div class="input-group">							
											<span class="input-group-addon">
												<i class="fa fa-envelope-o"></i>
											</span>
											<input type="text" class="form-control1" placeholder="Email Address">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Password</label>
									<div class="col-md-8">
										<div class="input-group">
											<span class="input-group-addon">
												<i class="fa fa-key"></i>
											</span>
											<input type="password" class="form-control1" id="exampleInputPassword1" placeholder="Password">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Email Address</label>
									<div class="col-md-8">
										<div class="input-group input-icon right">
											<span class="input-group-addon">
												<i class="fa fa-envelope-o"></i>
											</span>
											<input id="email" class="form-control1" type="text" placeholder="Email Address">
										</div>
									</div>
									<div class="col-sm-2">
										<p class="help-block">With tooltip</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Password</label>
									<div class="col-md-8">
										<div class="input-group input-icon right">
											<span class="input-group-addon">
												<i class="fa fa-key"></i>
											</span>
											<input type="password" class="form-control1" placeholder="Password">
										</div>
									</div>
									<div class="col-sm-2">
										<p class="help-block">With tooltip</p>
									</div>
								</div>
								<div class="form-group has-success">
									<label class="col-md-2 control-label">Input Addon Success</label>
									<div class="col-md-8">
										<div class="input-group input-icon right">
											<span class="input-group-addon">
												<i class="fa fa-envelope-o"></i>
											</span>
											<input id="email" class="form-control1" type="text" placeholder="Email Address">
										</div>
									</div>
									<div class="col-sm-2">
										<p class="help-block">Email is valid!</p>
									</div>
								</div>
								<div class="form-group has-error">
									<label class="col-md-2 control-label">Input Addon Error</label>
									<div class="col-md-8">
										<div class="input-group input-icon right">
											<span class="input-group-addon">
												<i class="fa fa-key"></i>
											</span>
											<input type="password" class="form-control1" placeholder="Password">
										</div>
									</div>
									<div class="col-sm-2">
										<p class="help-block">Error!</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Checkbox Addon</label>
									<div class="col-md-8">
										<div class="input-group">
											<div class="input-group-addon"><input type="checkbox"></div>
											<input type="text" class="form-control1">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Checkbox Addon</label>
									<div class="col-md-8">
										<div class="input-group">
											<input type="text" class="form-control1">
											<div class="input-group-addon"><input type="checkbox"></div>
											
										</div>
									</div>
									<div class="col-sm-2">
										<p class="help-block">Checkbox on right</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Radio Addon</label>
									<div class="col-md-8">
										<div class="input-group">
											<div class="input-group-addon"><input type="radio"></div>
											<input type="text" class="form-control1">
										</div>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Radio Addon</label>
									<div class="col-md-8">
										<div class="input-group">
											<input type="text" class="form-control1">
											<div class="input-group-addon"><input type="radio"></div>
											
										</div>
									</div>
									<div class="col-sm-2">
										<p class="help-block">Radio on right</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Input Processing</label>
									<div class="col-md-8">
										<div class="input-icon right spinner">
											<i class="fa fa-fw fa-spin fa-spinner"></i>
											<input id="email" class="form-control1" type="text" placeholder="Processing...">
										</div>
									</div>
									<div class="col-sm-2">
										<p class="help-block">Processing right</p>
									</div>
								</div>
								<div class="form-group">
									<label class="col-md-2 control-label">Static Paragraph</label>
									<div class="col-md-8">
										<p class="form-control1 m-n">email@example.com</p>
									</div>
								</div>
								<div class="form-group mb-n">
									<label class="col-md-2 control-label">Readonly</label>
									<div class="col-md-8">
										<input type="text" class="form-control1" placeholder="Readonly" readonly="">
									</div>
								</div>
							</form>
						</div>
						
						
						<div class="bs-example" data-example-id="form-validation-states-with-icons">
							<form>
								<div class="form-group">
									<span id="inputGroupSuccess1Status" class="sr-only">(success)</span>
								</div>
								<div class="form-group">
									<label for="exampleInputFile">File input</label>
									<input type="file" id="exampleInputFile">
									<p class="help-block">Example block-level help text here.</p>
								</div>
								<div class="panel-footer">
									<div class="row">
										<div class="col-sm-8 col-sm-offset-2">
											<button class="btn-primary btn">Submit</button>
											<button class="btn-default btn">Cancel</button>
											<button class="btn-inverse btn">Reset</button>
										</div>
									</div>
								</div>
							</form>
						</div>
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