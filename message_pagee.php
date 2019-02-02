<?php
include 'user_sidebar.php';
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<title>Message System</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
   <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
    			<div class="breadcrumb"></div>
    	</div>
        From:
        <div class="panel panel-default chat">
            <div class="panel-heading">
               <form id="messageform" action="into_db.php" method="post">
                <div class="input-group">
                        <input id="btn-input" type="text" class="form-control input-md" placeholder="Enter a user name" name="USR_NAME" id="USR_NAME" value="<?php echo $_SESSION['USR_NAME']; ?>" readonly>
                </div>
                <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
            </div>
            <br>
            <div class="panel-body" style="height:400px;">
                <?php
                    include "connection.php";
                    $user = $_SESSION['USR_NAME'];
                    $q1 = "SELECT * FROM message WHERE USR_NAME='$user'";
                    $f1 = mysqli_query($conn,$q1);
                    while($row = mysqli_fetch_assoc($f1)){
                    $chat = $row['MESSAGE'];
                    $time = $row['CREATED_AT'];
                    echo "<p class='well'>".$chat." "." "."<i style='float:right;'>".$time."</i>"."</p>";
                    }
                ?>
            </div>
			<div class="panel-footer">
					<div class="input-group">
				        <input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here..." name="msg" id="msg"/><span class="input-group-btn">
				        <input type="submit" class="btn btn-primary btn-md" id="send" name="send" value="send">
						</span>
                    </div>
                </form>
			</div>
		</div>
	</div>
    <script src="js/jquery.validate.js" type="text/javascript"></script>
    <script src="js/additional-methods.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('#messageform').validate({
                    rules: {
                            msg: "required"
                        },
                    messages: {
                        msg: "Please Write Msg First"
                    }
                });
            });
    </script>
</body>
</html>