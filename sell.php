<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sell</title>
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
			if (isset($_SESSION['message'])) {?>
				<div class="alert alert-success">
					Your data has been posted !!
				</div>
			
			<?php } ?>
		<div class="header-image">
			<img src="img/bg6.jpg" alt="">
			<div class="header-title">Farming Assistance Web Service</div>

		</div>
		
			<ul class="nav nav-tabs nav-justified">
				<!-- <li class="nav-item"><a id="link1" class="nav-link" href="index.php">Home</a></li> -->

						<li class="nav-item"><a id="link1" class="nav-link" href="farmer-login1.php">Complaint Page</a></li>

						<!-- <li class="nav-item"><a id="link1" class="nav-link" href="">View Complaint Status</a></li> -->

						<!-- <li class="nav-item"><a id="link1" class="nav-link" href="">Farming Tips</a></li> -->
						<li class="nav-item"><a id="link1" class="nav-link" href="cad.php">Crop Add Details</a></li>

				       <li class="nav-item"><a id="link1" class="nav-link"sell.php href="">Sell Crop</a></li>

				       <li class="nav-item"><a id="link1" class="nav-link" href="index.php">Logout</a></li></ul>

				       <!-- form section -->
				       <div class="main-body2">
				       	<div class="form2">
							<h3 class="text-center text-white text-uppercase mt-4 mb-0 bg-primary">Sell Products</h3>

								<form action="sell-confirm.php" method="post" >
									<!-- <label for="usr">Crop ID:</label>
									<input class="form-control mb-3-1 w-100 mx-auto bg-info" type="number" name="number" placeholder="Crop ID"> -->

									<label class="mt-3" for="usr">Farmer Name:</label>
									<input class="form-control mb-3-1 w-100 mx-auto bg-info" type="text" name="name" placeholder="">
									<label for="usr">Crop Name:</label>
									<input class="form-control mb-3-1 w-100 mx-auto bg-info" type="text" name="cropname" placeholder="">

									<label for="usr">Quantity in KGs:</label>
									<input class="form-control mb-3-1 w-100 mx-auto bg-info" type="number" name="quantity" placeholder="">

									<label for="usr">Taka:</label>
									<input class="form-control mb-3-1 w-100 mx-auto bg-info" type="text" name="taka" placeholder="">

								
										<div class="text-center">
											<input class="btn btn-success mt-3 mb-4 text-center" type="submit" value="Submit">
										</div>
										
										
								</form>

				       	
				  		</div>
				 			      	
				       </div>
			

						
		</div>
	



	




<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php 

unset($_SESSION['message']);


 ?>

</body>
</html>