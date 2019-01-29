<?php
include('connection.php');
if(isset($_POST['login']))
{
  $email=$_POST['email'];
  $password=$_POST['password'];
  $query=mysqli_query($conn,"call login('$email','$password')");
	$result = $query;
	if ($result->num_rows > 0)
	{
		while($row = $result->fetch_assoc())
		{
			if(($row['EMAIL']==$email) && ($row['PASSWORD']==$password))
			{
				header("location: index.php");
			}
		}		 
	}
	else {
		echo "<script type='text/javascript'>alert('Invalid Credentials.')</script>";
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
	<link href="vendors/pace-progress/css/pace.min.css" rel="stylesheet">
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
									<input id="email" name="email" class="form-control" type="text" placeholder="Email">
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
	<script type="text/javascript" src="js/main.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript">
		$(document).ready(function(e) {
			$('#login').click(function() {
				var emailBox=$("#email");
				var sEmail = $('#email').val();
				if ($.trim(sEmail).length == 0) {
					alert('Please enter valid email address');
					e.preventDefault();
				}
				if (validateEmail(sEmail)) {
					alert('Email is valid');
				}
				else{
					alert('Invalid Email Address');
            		e.preventDefault();
        		}
    		});
		});
		
		function validateEmail(sEmail) {
			var filter = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
			if (filter.test(sEmail)) {
				return true;
			}
			else {
				return false;
			}
		}
	</script>	
</body>
</html>