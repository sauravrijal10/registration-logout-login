<?php 
	include("sessiontest.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="design.css">	
</head>
<body>
	<div class="jumbotron">
	<div>
		<form action="" method="post">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
							<h1>Welcome!</h1>
							<p>Here you can create your own To Do list.</p>
							<img src="download.png" alt="A sample of To DO list">
					</div>
					<div class=col-sm-4>
						<h1>Login</h1><hr>
						<label for="username"><b>Username:</b></label>
						<input type="text" name="username" class="form-control" placeholder="Enter your username" required>

						<label for="password"><b>Password:</b></label>
						<input type="password" name="password" class="form-control" placeholder="Enter your password" required><hr>

						<input type="submit" name="login" value="login" class="btn btn-primary">
						<p>Not registered yet?? <a href="registration.php"><B>Register Here</B></a></p>
					</div>
					<div class=col-sm-4>
						<p class="p1"><b>What is To Do list?</b></p>
						<p>It is the latest way of listing the things that you must do. It can help you to remember the things that you need to do. It is very useful for you to remember the things and to accomplish the work in time.</p>
					</div>
				</div>
			</div>
		</form>

	</div>
	</div>	
</body>
</html>