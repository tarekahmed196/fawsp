<?php 

include('connect.php');

session_start();

$id=$_GET['id'];

$sql="DELETE FROM selling WHERE id=$id";


if (mysqli_query($conn,$sql)) {
	header('location: crop-received.php');

	$_SESSION['delete']="true";
}

 ?>