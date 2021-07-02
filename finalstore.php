<?php 


include('connect.php');

session_start();

 $cropid=$_POST['cropid'];
 $cropname=$_POST['cropname'];
 $cropimage=$_POST['cropimage'];
 $quantity=$_POST['quantity'];

$sql="INSERT INTO user VALUES('','$cropid','$cropname','$cropimage','$quantity')";
// $valid="SELECT* FROM registration WHERE email='$email' ";

// $result=mysqli_query($conn,$sql);
 
// $rowcount=mysqli_num_rows($result);

// if ($rowcount==1) {
// 	header('location: supp-login1.php');

// 	$_SESSION['error']="true";
// }else{

// $sql="INSERT INTO registration VALUES('','$name','$email','$address')";


if (mysqli_query($conn,$sql)) {
	header('location: supplier-module.php');

	$_SESSION['message']="true";
}

 ?>