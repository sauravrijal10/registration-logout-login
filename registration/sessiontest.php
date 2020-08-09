<?php
			
			session_start();
			$servername="localhost";
			$username="root";
			$Serverpassword="";
			$dbname="user_info";
			
			if(isset($_POST['submit'])){
				$firstname=$_POST['firstname'];
				$lastname=$_POST['lastname'];
				$email=$_POST['email'];
				$phonenumber=$_POST['number'];
				$user_name=$_POST['user_name'];
				$password=$_POST['password'];
				$cpassword=$_POST['cpassword'];
				if($password==$cpassword){
					$conn = mysqli_connect($servername, $username, $Serverpassword, $dbname);
					if(!$conn){
						die ("connection failed".mysqli_connect_error());
						}
					else{
						$sql="SELECT * from users WHERE user_name='$user_name'";
						$result=mysqli_query($conn,$sql);
						$resultcheck=mysqli_num_rows($result);
						if($resultcheck>0){
							echo "username exist";
						}
						if($resultcheck==0){
							$sql="INSERT INTO users(firstname, lastname, email, phonenumber, user_name, password) values('$firstname', '$lastname', '$email', '$phonenumber', '$user_name', '$password')";
							$result=mysqli_query($conn, $sql);
							if($result){
								echo "you are registered";
							}
							else{
								 echo "failed";
							}
						}						
					}
					}
					
				else{
					echo "your password do not match";
				}
			}
			if(isset($_POST['login'])){
				$uname=$_POST['username'];
				$password=$_POST['password'];
				$conn = mysqli_connect($servername, $username, $Serverpassword, $dbname);
				if(empty($uname)|| empty($password)){
					echo "you cannot leave username and password empty";
				}
				else{
				$sql="SELECT * FROM users WHERE user_name='$uname'";
				$result=mysqli_query($conn,$sql);
				$check=mysqli_fetch_assoc($result);

				if($check['password']==$password){
					header("location:home.php");
				}
				else{
					echo "password incorrect";
				}
			}
		}

			
?>