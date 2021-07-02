<?php 


include('connect.php');

session_start();

 $name=$_POST['name'];
 $cropname=$_POST['cropname'];
 $quantity=$_POST['quantity'];
 $taka=$_POST['taka'];

$sql="INSERT INTO selling VALUES('','$name','$cropname','$quantity','$taka')";



if (mysqli_query($conn,$sql)) {
	header('location: sell.php');

	$_SESSION['message']="true";
}

 ?>