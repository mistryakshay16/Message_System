<?php
include "connection.php";
if(isset($_POST['send'])){
	$user = $_POST['USR_NAME'];
	$chat = $_POST['msg'];
	$q = "INSERT INTO message (USR_NAME,MESSAGE) VALUES ('$user','$chat')";
	$query = mysqli_query($conn,$q);
	if($query)
	{
	    header('location: message_pagee.php');
	}
}
?>