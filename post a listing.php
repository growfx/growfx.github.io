<?php
	
	session_start();
    
   
	$email = $_SESSION['email'];

	if (isset($email)) {
	
		header("Location: register.php");
	}else{
	include('db.php');
	include("header.php");

	if (isset($_POST['loginBtn'])) {
		$email = $_POST['email'];
		$fullname = $_POST['fullname'];
		$password = $_POST['password'];
		$cpassword = $_POST['cpassword'];
	
	

		if (empty($email) or empty($fullname) or empty($password) or empty($cpassword)) {
			$msg =  "All fields are requiured";
		}elseif ($password != $cpassword) {
			$msg = "Password Mismatched";
		}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$msg = "Invalid Email Format";
		}else{
				$query = "INSERT INTO user (email, fullname, password ) VALUES ( '$email', '$fullname', '$password')";
				$result = mysqli_query($conn, $query);
				if ($result) {
					header("Refresh:0; url=Login.php");
					echo "<script>alert('Registration Successful, Click Ok to Login')</script>";
				}else{
					header("Refresh:0; url=post a listing.php");
					echo "<script>alert('Error in Registration')</script>";

				}
			}
			

		}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body style="background-color: white;">



<div class="container col-4" style="margin-top: 80px;">
	<div class="card" style="padding: 15px;">
		<form action="post a listing.php" method="POST" >
			<img src="p4.png" style="margin-left: 20%">
			<h2 style="text-align: center; font-weight: bold; font-family: berlin sans fb demi">User Registration</h2>
			<?php echo "<span style='color: red; font-weight: bolder;'>". @$msg."</span>"; ?>
			<br><label style="font-weight: bold; font-family: berlin sans fb demi ">Email</label>
			<input type="text" name="email" placeholder="Email" class="form-control" value="">
			<label style="font-weight: bold; font-family: berlin sans fb demi ">Full Name</label>
			<input type="text" name="fullname" placeholder="Full Name"  class="form-control">
			<label style="font-weight: bold; font-family: berlin sans fb demi ">Password</label>
			<input type="password" name="password" placeholder="Password" class="form-control">
			<label style="font-weight: bold; font-family: berlin sans fb demi ">Confirm Password</label>
			<input type="password" name="cpassword" placeholder="re-enter password" class="form-control"><br>
			<input type="submit" name="loginBtn" class="btn btn-outline" value="Register" style="border: 1px solid lawngreen; background-color:lawngreen">
			<a href="Login.php">Already Have An Account?</a>
		</form>


	</div>
</div>









<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


<?php

	}
?>
</body>
</html>