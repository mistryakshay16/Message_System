<?php
include 'admin_nav_sidebar.php';
include ('connection.php');

if (isset($_POST['submit'])) {
   $USR_ID = $_POST['USR_ID'];
   $FST_NAME =  $_POST['FST_NAME'];
   $LST_NAME =  $_POST['LST_NAME'];
   $GENDER =  $_POST['GENDER'];
   $USR_NAME = $_POST['USR_NAME'];
   $EMAIL = $_POST['EMAIL'];
   $PASSWORD = $_POST['PASSWORD'];
   $ROLE = $_POST['ROLE'];
  $query=mysqli_query($conn,"call register('$USR_ID','$FST_NAME','$LST_NAME','$GENDER','$USR_NAME','$EMAIL','$PASSWORD','$ROLE')");
  
  if($query)
  {  
  	echo "<script>alert('Registered');</script>";
    // header("location:login.php");
  }
  else
  {
    echo "<script>alert('Invalid  login details');</script>";
  }
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Messege System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">Add User</li>
			</ol>
		</div>
		<div class="panel panel-default chat">
			<div class="panel-heading">
				Add User
			</div>
			<div class="panel-footer">
				<form  method="POST" name="adduserform" id="adduserform" action="">
					<div class="form-group">
						<label>User Id</label>
						<input id="userid" name="USR_ID" class="form-control" placeholder="User Id">
					</div>
					<div class="form-group">
						<label>First Name</label>
						<input id="fstname" name="FST_NAME" class="form-control" placeholder="First Name">
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input id="lstname" name="LST_NAME" class="form-control" placeholder="Last Name">
					</div>
					<div class="form-group">
						<label>Gender</label>
						<label>
							<input type="radio" id="gender_1" name="GENDER" value="Male"  checked>Male
						</label>
						<label>
							<input type="radio" id="gender_2" name="GENDER" value="Female">Female
						</label>						
					</div>
					<div class="form-group">
						<label>User Name</label>
						<input id="usrname" name="USR_NAME" class="form-control" placeholder="User Name">
					</div>
					<div class="form-group">
						<label>Role</label>
						<select class="form-control" name="ROLE">
							<option id="role" name="ROLE">Admin</option>
							<option id="role" name="ROLE">User</option>
						</select>
					</div>
					<div class="form-group">
						<label>Email Id</label>
						<input id="email" name="EMAIL" class="form-control" placeholder="Email">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input id="password" name="PASSWORD" type="password" class="form-control" placeholder="Password">
					</div>
					<div class="form-group">
						<label>Re-Enter Password</label>
						<input id="cpassword" name="Confirm_password" type="password" class="form-control" placeholder="Re-Enter Password">
					</div>
					<button id="submit" name="submit" type="submit" class="btn btn-primary">Submit</button>
				</form>
			</div>
		</div>
	</div>
    <script src="js/jquery.validate.js" type="text/javascript"></script>
    <script src="js/additional-methods.js" type="text/javascript"></script>
	<script type="text/javascript">
        $(document).ready(function () {
            $('#adduserform').validate({
                    rules: {
                    USR_ID: {
                        required: true,
                        maxlength: 6
                    }, 
                    FST_NAME: {
                        required: true
                    },
                    LST_NAME: {
                        required: true
                    },
                    USR_NAME: {
                        required: true,
                        maxlength: 10
                    },
                    EMAIL: {
                        required: true,
                        email: true
                    },
                    PASSWORD: {
                        required: true,
                        maxlength: 8,
                        minlength: 6
                    },
                    Confirm_password: {
                        required: true,
                        maxlength: 8,
                        minlength: 6,
                        equalTo: "#password"
                    }
                },
                messages: {
                	USR_ID: {
                		required: "User ID is mandatory",
                		maxlength: "User ID cannot exceed 6 characters"
                	},
                	FST_NAME: {
                        required: "First name is mandatory"
                    },
                    LST_NAME: {
                        required: "Last name is madatory"
                    },
                    USR_NAME: {
                        required: "User name is mandatory",
                        maxlength: "User name cannot exceed 10 characters"
                    },
                    EMAIL: {
                        required: "Email is mandatory",
                        email: "Please enter valid email"
                    },
                    PASSWORD: {
                        required: "Password is mandatory",
                        minlength: "Password should be atleast 6 characters"
                    },
                    Confirm_password: {
                        required: "Password is mandatory",
                        minlength: "Password should be atleast 6 characters",
                        equalTo: "Both password should be same"
                    }

                }
            });
        });
    </script>
</body>
</html>