<?php
include 'user_sidebar.php';
?>
<!DOCTYPE html>
<html>
<head>
	<title>Chat Page</title>
</head>
<body>
   <div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<div class="breadcrumb"></div>
		</div>
        <div class="panel panel-default chat">
        <div class="panel-heading">
          Chat
        <span class="pull-right clickable panel-toggle panel-button-tab-left"><em class="fa fa-toggle-up"></em></span>
        </div>
        <div class="panel-body" style="height:525px;">
            <?php
            include "connection.php";
            $q1 = "SELECT * FROM message";
            $f1 = mysqli_query($conn,$q1);
            while($row = mysqli_fetch_assoc($f1)){
                $chat = $row['MESSAGE'];
                $time = $row['CREATED_AT'];
            
                echo "<p>".$chat." " .$time."</p>";
            }
            ?>
        </div>
					<div class="panel-footer">
                        <form action="into_db.php" method="post">
						<div class="input-group">
				        <input id="btn-input" type="text" class="form-control input-md" placeholder="Type your message here..." name="msg" id="msg"/><span class="input-group-btn">
				        <input type="submit" class="btn btn-primary btn-md" id="send" name="send" value="send">
						</span></div>
                        </form>
					</div>
				</div>
				</div>
				</body>
				</html>