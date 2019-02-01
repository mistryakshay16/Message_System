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
	<title></title>
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
		</div><!--/.row-->

		<div class="panel panel-default chat">
			<div class="panel-heading">
				Add User
			</div>
			<div class="panel-footer">
				<form  method="POST" name="adduserform" id="adduserform" action="">
					<div class="form-group">
						<label>User Id</label>
						<input class="form-control" placeholder="User Id" name="USR_ID">
					</div>
					<div class="form-group">
						<label>First Name</label>
						<input class="form-control" placeholder="First Name" name="FST_NAME">
					</div>
					<div class="form-group">
						<label>Last Name</label>
						<input class="form-control" placeholder="Last Name" name="LST_NAME">
					</div>
					<div class="form-group">
						<label>Gender</label>
						<label>
							<input type="radio" id="GENDER" value="Male" name="GENDER" checked>Male
						</label>
						<label>
							<input type="radio" id="GENDER" value="Female" name="GENDER">Female
						</label>						
					</div>
					<div class="form-group">
						<label>User Name</label>
						<input class="form-control" placeholder="User Name" name="USR_NAME">
					</div>
					<div class="form-group">
						<label>Role</label>
						<select class="form-control" name="ROLE">
							<option name="ROLE">Admin</option>
							<option name="ROLE">User</option>
						</select>
					</div>
					<div class="form-group">
						<label>Email Id</label>
						<input class="form-control" placeholder="Email" name="EMAIL">
					</div>

					<div class="form-group">
						<label>Password</label>
						<input type="password" class="form-control" placeholder="Password" name="PASSWORD">
					</div>
					<div class="form-group">
						<label>Re-Enter Password</label>
						<input type="password" class="form-control" placeholder="Re-Enter Password" name="Confirm_password">
					</div>
					<button type="submit" class="btn btn-primary" name="submit">Submit</button>
					<button type="reset" class="btn btn-default">Cancel</button>
				</form>
			</div>
		</div>
	</div>
	<script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery.validate.js" type="text/javascript"></script>
    <script src="js/custom.js" type="text/javascript"></script>
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
                    GENDER: {
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
                }
            });
        });
    </script>
</body>
</html>