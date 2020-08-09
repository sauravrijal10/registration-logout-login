<?php 
	include("sessiontest.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>User Registration</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<script href="js/bootstrap.min.js"></script>
</head>
<body>
	
	<div>
		<form action="" method="post">
			<div class="container">
				<div class="row">
					<div class="col_sm_3">
						<h1>From Registration</h1>
						<p>Fill up the form with correct values</p>
						<hr>
						<label for="firstname"><b>Firstname</b></label>
						<input class="form-control" type="text" name="firstname" placeholder="Enter your firstname" required>

						<label for="lastname"><b>Lastname</b></label>
						<input class="form-control" type="text" name="lastname" placeholder="Enter your lastname" required>

						<label for="email"><b>Email</b></label>
						<input class="form-control" type="email" name="email" placeholder="Enter your email" required>

						<label for="phonenumber"><b>Phone Number</b></label>
						<input class="form-control" type="text" name="number" placeholder="Enter your phonenumber" required>

						<label for="username"><b>Username</b></label>
						<input class="form-control" type="text" name="user_name" placeholder="Enter your username" required>

						<label for="password"><b>Password</b></label>
						<input class="form-control" type="password" name="password" placeholder="Enter your password" required>

						<label for="cpassword"><b>Confirm Password</b></label>
						<input class="form-control" type="password" name="cpassword" placeholder="Confirm your password" required>
						<hr>

						<input class="btn btn-danger" type="submit" id="registration" name="submit" value="Sign Up">
						<p>Already have an account?? <br> <b><a href="login.php">Sign in</a></b></p>
					</div>
				</div>
			</div>
		</form>
	</div>
	
</body>
</html>