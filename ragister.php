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
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Registration Form</title>
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="css/pace.min.css">
</head>

<body class="app flex-row align-items-center">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
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
                                        <input class="form-check-input" type="radio" value="Male" name="GENDER" id="gender" checked>
                                        <label class="form-check-label" for="male">Male</label>
                                    </div>
                                    <div class="form-check form-check-inline mr-1">
                                        <input class="form-check-input" type="radio" value="Female" name="GENDER" id="gender_1">
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
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="js/jquery.validate.js" type="text/javascript"></script>
    <script src="js/additional-methods.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('#RegistrationForm').validate({
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