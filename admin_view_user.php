<?php
include 'admin_nav_sidebar.php';
include ('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Message System</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
	<link href="css/styles.css" rel="stylesheet">
</head>
<body>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">View User</li>
			</ol>
		</div>
		<div class="panel panel-default chat">
			<div class="panel-heading">
				View User
			</div>
			<div class="panel-footer">
				<form  method="POST" name="adduserform" id="adduserform" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<div class="table-responsive"> 
						<table id="example" class="display">
							<thead>
								<tr>
									<th>Serial No.</th>
									<th>User Name</th>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Email</th>
									<th>Show</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include "connection.php";

								$query = mysqli_query($conn, "SELECT PK_REG_ID,USR_NAME,FST_NAME,LST_NAME,EMAIL FROM usr_rgstraton");

								while ($result = mysqli_fetch_array($query)) {
                    
									echo "<tr> 
									<td>".$result['PK_REG_ID']."></td>
									<td>".$result['USR_NAME']."</td>
									<td>".$result['FST_NAME']."</td>
									<td>".$result['LST_NAME']."</td>
									<td>".$result['EMAIL']."</td>
									<td><a href=\"view_message.php?user=".$result['USR_NAME']."\">Show</a></td>
									<td><button>Delete</button></td>
									</tr>";
								}
								?>
							</tbody>
						</table>
					</div>
				</form>
			</div>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-3.3.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script>
    	$(document).ready(function() {
    		$('#example').DataTable( {
    			columnDefs: [ {
    				targets: [ 0 ],
    				orderData: [ 0, 1 ]
    			}, {
    				targets: [ 1 ],
    				orderData: [ 1, 0 ]
    			}, {
    				targets: [ 4 ],
    				orderData: [ 4, 0 ]
    			} ]
    		} );
    	} );
    </script>
</body>
</html>