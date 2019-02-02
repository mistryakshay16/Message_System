<?php
include('connection.php');
session_start();
if(isset($_POST['login']))
{
$email=$_POST['email'];
$password=$_POST['password'];
$username=$_POST['email'];
	$query = "select * from usr_rgstraton";
	$result = mysqli_query($conn,$query);
	while($row = mysqli_fetch_assoc($result))
{
	if(($row['EMAIL'] == $email OR $row['USR_NAME'] == $username) AND $row['PASSWORD']==$password)
	{		
		if($row['ROLE']=='Admin')
        {
            $_SESSION['USR_NAME'] = $username;
            $_SESSION['ROLE'] = 'Admin';
		header('location: admin_dashboard.php');
		}
		
		else if($row['ROLE']== 'User')
        {
            $_SESSION['USR_NAME'] = $username;
            $_SESSION['ROLE'] = 'User';
		header('location: message_pagee.php');
		}
    }
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Message System-Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <link href="css/style.css" rel="stylesheet">
</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-5 col-sm-12">
                <div class="card-group">
                    <div class="card p-4">
                        <div class="card-body bd">
                            <form method="POST" action="login.php">
                                <h1 class="center">Login</h1>
                                <p class="text-muted">Log In to your account</p>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon-user"></i>
                                        </span>
                                    </div>
                                    <input id="email" name="email" class="form-control" type="text" placeholder="Email or Username">
                                </div>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">
                                            <i class="icon-lock"></i>
                                        </span>
                                    </div>
                                    <input id="password" name="password" class="form-control" type="password" placeholder="Password">
                                </div>
                                <div class="row">
                                    <div class="col-6">
                                        <button id="login" name="login" class="btn btn-primary px-4" type="submit">Login</button>
                                    </div>
                                    <div class="col-6 text-right">
                                        <button id="forgot" name="forgot" class="btn btn-link px-0" type="submit">Forgot password?</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>