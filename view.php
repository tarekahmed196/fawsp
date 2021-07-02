
<?php 
include('connect.php');

session_start();



$id=$_GET['id'];

$sql="SELECT* FROM complaint WHERE id=$id";

$result=mysqli_query($conn,$sql);

$row=mysqli_fetch_assoc($result);

 ?>



<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>View Single Data</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
</head>
<body>
	

<div class="container">
	<div class="row">
		<div class="col-md-12">
	
			<h1 class="text-center text-info text-uppercase">View Data</h1>

			<table class="table table-bordered table-striped">
				<tr>
					<th>Farmers ID</th>
					<td><?=$row['id']?></td>
				</tr>
				<tr>
					<th>NAME</th>
					<td><?=$row['name']?></td>
				</tr>
				<tr>
					<th>Comment</th>
					<td><?=$row['message1']?></td>
				</tr>
				
			</table>


			<a class="btn btn-primary" href="admin.php">Back</a>
			<a class="btn btn-danger" href="index.php">Logout</a>
		</div>
	</div>
</div>



<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>