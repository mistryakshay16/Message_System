<?php
include ('connection.php');

if (isset($_POST['submit'])) {
   $USR_ID = $_POST['USR_ID'];
   $FST_NAME =  $_POST['FST_NAME'];
   $LST_NAME =  $_POST['LST_NAME'];
   $GENDER =  $_POST['GENDER'];
   $USR_NAME = $_POST['USR_NAME'];
   $EMAIL = $_POST['EMAIL'];
   $PASSWORD = $_POST['PASSWORD'];
  $query=mysqli_query($conn,"call register('$USR_ID','$FST_NAME','$LST_NAME','$GENDER','$USR_NAME','$EMAIL','$PASSWORD')");
  
  if($query)
  {  
    header("location:login.php");
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
    <title>Registration Form</title>
    <link href="css/style.css" rel="stylesheet">
    <style>
        .heading{
            text-align: center;
            font-family: cursive;
            text-decoration: underline;
        }
        .card-body{
            border: 2px solid black;
        }
    </style>
</head>

<body class="app flex-row align-items-center">
    <div class="container container-fluid">
        <div class="row justify-content-center">
            <div class="col-md-6 col-sm-12">
                <div class="card mx-4">
                    <div class="card-body p-4">
                        <form method="POST" class="RegistrationForm" name="RegistrationForm" id="RegistrationForm">
                            <h1 class="heading">Register</h1>
                            <p class="text-muted">Create your account</p>
                            <div class="input-group mb-3">
                                <input class="form-control" type="text" placeholder="User Id" name="USR_ID" id="user_id" required maxlength="15">
                            </div>
                            <div class="input-group mb-3">
                                <input class="form-control" type="text" placeholder="First Name" name="FST_NAME" id="first_name" required>
                            </div>
                            <div class="input-group mb-3">
                                <input class="form-control" type="text" placeholder="Last Name" name="LST_NAME" id="last_name" required>
                            </div>
                            <div class="form-group row">
                                <label class="col-md-3 col-sm-12 col-form-label">Gender:</label>
                                <div class="col-md-9 col-form-label">
                                    <div class="form-check form-check-inline mr-1">
                                        <input class="form-check-input" type="radio" value="Male" name="GENDER" checked>
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline mr-1">
                                        <input class="form-check-input" type="radio" value="Female" name="GENDER">
                                        <label class="form-check-label" for="female">Female</label>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input class="form-control" type="text" placeholder="User Name" name="USR_NAME" id="user_name" required>
                            </div>
                            <div class="input-group mb-3">
                                <input class="form-control" type="email" placeholder="Email Id" name="EMAIL" id="email" required>
                            </div>
                            <div class="input-group mb-3">
                                <input class="form-control" type="password" placeholder="Password" name="PASSWORD" id="password" required>
                            </div>
                            <div class="input-group mb-3">
                                <input class="form-control" type="password" placeholder="Re-Enter Password" name="Confirm_password" id="Confirm_password" required>
                            </div>
                            <input class="btn btn-block btn-success" type="submit" value="submit" name="submit" id="submit">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>   
</html>