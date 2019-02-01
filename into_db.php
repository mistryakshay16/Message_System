<?php
include "connection.php";
if(isset($_POST['send']))
{
$chat = $_POST['msg'];
$q = "INSERT INTO message (MESSAGE) VALUES ('$chat')";
$query = mysqli_query($conn,$q);
if($query)
{
    header('location: message_page.php');
}
}
?>