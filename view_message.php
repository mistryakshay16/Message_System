<?php
include 'admin_nav_sidebar.php';
include ('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>
<body>
	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#">
					<em class="fa fa-home"></em>
				</a></li>
				<li class="active">View Message</li>
			</ol>
		</div>
		<div class="panel panel-default chat">
			<div class="panel-heading">
				View Message
			</div>
			<div class="panel-footer">
				<form  method="POST" name="adduserform" id="adduserform" action="">
					<div class="table-responsive"> 
						<table id="example" class="display"">
							<thead>
								<tr>
									<th>SR No</th>
									<th>Message</th>
									<th>Time</th>
									<th>Edit</th>
									<th>Delete</th>
								</tr>
							</thead>
							<tbody>
								<?php
								include "connection.php";

								$query = mysqli_query($conn, "SELECT PK_MSG_ID,MESSAGE,CREATED_AT FROM message");

								while ($result = mysqli_fetch_array($query)) {
                    
									echo "<tr> 
									<td>".$result['PK_MSG_ID']."</td>
									<td>".$result['MESSAGE']."</td>
									<td>".$result['CREATED_AT']."</td>
									<td>Edit</td>
									<td>Delete</td>
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