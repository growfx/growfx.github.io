<?php

	

	include('db.php');
	session_start();
	if (isset($_SESSION['email'])) {
		header("Location: post a listing.php");
	}else{


	if (isset($_POST['loginBtn'])) {
		$email = $_POST['email'];
		$password = $_POST['password'];

		if (empty($email) or empty($password)) {
			$msg = "All fields are required";
		}elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
			$msg = "Invalid Email Format";
		}else{
			$query = "SELECT * FROM user WHERE email='$email' and password='$password'";
			$result = mysqli_query($conn, $query);
			$num_rows = mysqli_num_rows($result);
			if ($num_rows == 1) {
				while ($arr = mysqli_fetch_array($result)) {
					$email = $arr['email'];
					$password = $arr['fullname'];
				
					$_SESSION['email'] = $email; 
					$_SESSION['fullname'] = $fullname;
				
			
				header("Refresh:0; url=register.php");
				}
			}else{

				$msg = "Invalid Login Details";
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


<div class="container col-4" style="margin-top: 30px;">
	<div class="card" style="padding: 15px; margin-top: 90px">
		<form action="Login.php" method="post">
			<img src="p4.png" style="margin-left: 20%">
			<h2 style="text-align: center; font-weight: bold; font-family: berlin sans fb demi">User Login</h2>
			<?php
				echo "<span style='color: red; font-weight: bolder;'>" .@$msg."<br></span>";
			?>
			<label style="font-weight: bold; font-family: berlin sans fb demi ">Email</label>
			<input type="email" name="email" class="form-control" value="" placeholder="Email Address">
			<label style="font-weight: bold; font-family: berlin sans fb demi; margin-top: 30px; ">Password</label>
			<input type="password" name="password" placeholder="Password" class="form-control" style="margin-bottom: 30px">
			<input type="submit" name="loginBtn" class="btn btn-outline" value="Login" style="border: 1px solid lawngreen; background-color:lawngreen">
			<a href="post a listing.php" >Don't Have An Account?</a>
		</form>
	</div>
</div>








<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>

<?php
	}
?>