<?php
	session_start();

	if (!isset($_SESSION['email'])) {
		header("Location: login.php");
	}else{


	include("db.php");

?>

   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <div style="background-color:lawngreen;">
    <nav style=" margin: 0px; background-color: black;" class="navbar navbar-expand-lg navbar-none bg-none">
 <!--  <a class="navbar-brand" href="#"></a> -->
 <a href="index.php"><img style="margin-left:0px" src="p4.png" width="80%"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a style="margin-left:100px; color:white; text-transform: uppercase; 
   ;line-height: 35px; font-weight:400;font-weight:bolder;" class="nav-link" href="your listing.php">Your listing  <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a style="margin-left:100px; color:white; text-transform: uppercase; 
   ;line-height: 35px; font-weight:400;font-weight:bolder;" class="nav-link" href="your request.php">Your request</a>
      </li>
    
      <li class="nav-item">
        <a style="margin-left:100px; color:white; text-transform: uppercase; 
   ;line-height: 35px; font-weight:400;font-weight:bolder;" class="nav-link disabled" href="logout.php">logout</a>
      </li>
    </ul>
   
  </div>
</nav>
   </div>












<div class="container">
	<h2 style="font-family:  berlin sans fb demi; font-weight: bold; text-align: center; margin-top: 30px">Welcome <?php echo $_SESSION['fullname']; ?></h1> 
</div>




   
<div class="container" style="margin-top: 20px; margin-bottom: 20px;">
	<a style="background-color: lawngreen; padding: 15px 100px 15px 15px; color: black; border-radius: 8px; font-weight: bold; font-family: berlin sans fb demi;  ">My Profile</a>
</div>

<div class="container">
	<table class="table table-bordered table-striped" style="margin-top: 50px">
		<tr>
			<th>Full Name</th>
			<th>Email Address</th>
			
		</tr>

		<?php
			$email = $_SESSION['email'];
			$query = "SELECT * FROM user WHERE email='$email'";
			$result = mysqli_query($conn, $query);
			if ($result) {
				while ($arr = mysqli_fetch_array($result)) {
					$fullname = $arr['fullname'];
					$email  = $arr['email'];
				


					echo "
						<tr>
							<td>$fullname</td>
							<td>$email</td>
							
						</tr>
					";
				}
			}
		?>

	</table>
</div>

















































<?php 	} ?>






   
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 