<?php 

include('connect.php');

session_start();

$id=$_GET['id'];

$sql="DELETE FROM complaint WHERE id=$id";


if (mysqli_query($conn,$sql)) {
	header('location: admin.php');

	$_SESSION['delete']="true";
}

 ?>