<?php 
session_start();
 ?>

 <!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>farmer-login</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/all.min.css">
	<link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="css/fontawesome.min.css">
</head>
<body>

	<div class="container">

		<?php 
			if (isset($_SESSION['signup'])) {?>
				<div class="alert alert-warning">
					Signup Successfully
				</div>
			
			<?php } ?>

		<?php 
			if (isset($_SESSION['er_login'])) {?>
				<div class="alert alert-danger">
					Invalid Email & Password 
				</div>
			
			<?php } ?>


		<div class="header-image">
			<img src="img/bg6.jpg" alt="">
			<div class="header-title">Farming Assistance Web Service</div>

		</div>
		
			<ul class="nav nav-tabs nav-justified">
				<li class="nav-item"><a id="link1" class="nav-link" href="index.php">Home</a></li>
						<li class="nav-item"><a id="link1" class="nav-link" href="">About Us</a></li>
				       <li class="nav-item"><a id="link1" class="nav-link" href="">Contact Us</a></li>
				       <li class="nav-item"><a id="link1" class="nav-link" href="">Login</a></li></ul>

				       <!-- form section -->
				       <div class="main-body2">
				       	<div class="form2">
							<h3 class="text-center text-white text-uppercase mt-3 mb-0 bg-primary">Login</h3>

								<form action="confirm_loginf.php" method="post">

									<label for="usr">Email:</label>
									<input class="form-control w-100 mx-auto bg-info" type="email" name="email" placeholder="Email" required="">

									<label class="mt-3-1" for="pwd">Password:</label>
									<input class="form-control mt-1 w-100 mx-auto bg-info" type="password" name="password" placeholder="Password" required="">

										<div class="text-center">
											<input class="btn btn-success mt-3 text-center" type="submit" value="Submit">
										</div>
										<div class="text-center">New User??
											<a class="btn btn-warning mt-2 mb-3" href="signupf.php">Sign Up</a>
										</div>
										
								</form>
				       	
				  		</div>
				 			      	
				       </div>


						
		</div>
	



	




<script src="js/jquery-3.5.1.slim.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<?php 

unset($_SESSION['signup']);
unset($_SESSION['er_login']);

 ?>


</body>
</html>