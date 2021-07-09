<?php 

include('connect.php');

session_start();

$id=$_GET['id'];

$sql="DELETE FROM message WHERE id=$id";


if (mysqli_query($conn,$sql)) {
	header('location: read_msg.php');

	$_SESSION['delete']="true";
}

 ?>