<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Message System</title>
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
</head>
<body>
	<nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse"><span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>Message</span>System</a>
			</div>
		</div>
	</nav>
	<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<div class="profile-sidebar">
			<div class="profile-userpic">
				<img src="http://placehold.it/50/30a5ff/fff" class="img-responsive" alt="">
			</div>
			<div class="profile-usertitle">
				<?php
                if(!isset($_SESSION['USR_NAME'])) {
                    header("location: login.php");
                }elseif (isset($_SESSION['USR_NAME']) && $_SESSION['ROLE'] == 'User') {
                	header("location: message_pagee.php");
                }
                else{
                    echo $_SESSION['USR_NAME'];
                }
                ?>
			</div>
			<div class="clear"></div>
		</div>
		<div class="divider"></div>
			<ul class="nav menu">
				<li><a href="admin_adduser.php"><em class="fa fa-dashboard">&nbsp;</em> Add User</a></li>
				<li><a href="admin_view_user.php"><em class="fa fa-dashboard">&nbsp;</em> View User</a></li>
				<li><a href="logout.php"><em class="fa fa-power-off">&nbsp;</em> Logout</a></li>
			</ul>
	</div>
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/bootstrap-datepicker.js"></script>
	<script src="js/custom.js"></script> 
</body>
</html>