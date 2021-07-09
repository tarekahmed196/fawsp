<?php 

$conn=mysqli_connect('localhost','root','','fawsp');
session_start();
$sql="SELECT* FROM selling";

$result=mysqli_query($conn,$sql);

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Crop-received</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>
<body>

	<div class="container">
		

			<?php 
		 		if (isset($_SESSION['delete'])) {?>

		 			<div class="alert alert-danger">
		 				Data Removed Successfully!!
		 			</div>
			
		 		<?php } ?>

		<div class="header-image">
			<img src="img/bg6.jpg" alt="">
			<div class="header-title">Farming Assistance Web Service</div>

		</div>
		
			<ul class="nav nav-tabs nav-justified">
				<!-- <li class="nav-item"><a id="link1" class="nav-link" href="index.php">Home</a></li> -->

						<li class="nav-item"><a id="link1" class="nav-link" href="supp-login1.php">Post Advertisement</a></li>

				       <li class="nav-item"><a id="link1" class="nav-link" href="Crop-received.php">Crop Received</a></li>

				       <li class="nav-item"><a id="link1" class="nav-link" href="confirmation.php">Confirmation</a></li>

				       <li class="nav-item"><a id="link1" class="nav-link" href="index.php">Logout</a></li></ul>

				       <!-- Crop Add Details -->
				       <div class="main-body2">

				       	<!-- <div class="container">
										<div class="row">
												<div class="col-md-12"> -->

																	

															<!-- <?php 
							    							if (isset($_SESSION['update'])) {?>
							    								<div class="alert alert-info">
																		Data Update Successfully!!
							    								</div>
			
							    							<?php } ?> -->	


																		<h1 class="text-center text-info text-uppercase">Crop Advertisement</h1>
																		<table class="table table-bordered table-dark table-hover w-75 mx-auto text-center">
																			<tr>
																				<th>SL No</th>
																				<th>Farmer Name</th>
																				<th>Crop Name</th>
																				<th>Quantity in KGs</th>
																				<th>Taka</th>
																				<th>Reaction</th>
																			</tr>
			
																		<?php 
																			while ($row=mysqli_fetch_assoc($result)) {?>

			
																				<tr>
																					<td> <?=$row['id']; ?></td>
																					<td> <?=$row['name']; ?></td>
																					<td> <?=$row['cropname']; ?></td>
																					<td> <?=$row['quantity']; ?></td>
																					<td> <?=$row['taka']; ?></td>



									<td>
										<!-- <a class="btn btn-outline-light" href="view.php?id=<?=$row['id']?>" >Accept</a> -->

										<!-- <a class="btn btn-success" href="edit.php?id=<?=$row['id']?>" >Edit</a> -->

										<a class="btn btn-outline-danger" onclick="return confirm('Are you Sure ??')" href="delete.php?id=<?=$row['id'] ; ?>" 		title="">Remove Data</a>

									</td>


																					</tr>
																					<?php } ?>

																				</table>
												<div class="text-center mb-4">
													<a class="btn btn-success" href="supplier-module.php">Back to Form</a>
													<a class="btn btn-danger" href="index.php">Logout</a>
																					
												</div>

			

		</div>
	</div>
</div>
				       	
				       </div>
			

						
		</div>
	



	




<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php 

unset($_SESSION['delete']);

 ?>


</body>
</html>