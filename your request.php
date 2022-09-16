


          
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
	<table class="table table-bordered table-striped" style="margin-top: 50px">
		<tr>
			<th>property type</th>
			<th>city</th>
			<th>no of bedrooms</th>
			<th>name</th>
			<th>phone number</th>
			
			
		</tr>

		<?php
              
            
	     include("db.php");
           
      

			
		
			$propertytype = $_SESSION['propertytype'];
			$query = "SELECT * FROM request WHERE propertytype='$propertytype'";
			$result = mysqli_query($conn, $query);
			if ($result) {
				while ($arr = mysqli_fetch_array($result)) {
					$propertytype = $arr['propertytype'];
					$city = $arr['city'];
					$noofbedrooms = $arr['noofbedrooms'];
					$name = $arr['name'];
					$phonenumber = $arr['phonenumber'];
					


					echo "
						<tr>
							    <td>property type</td>
								<td>city</td>
								<td>no of bedrooms</td>
								<td>name</td>
								<td>phone number</td>
								
								
							
						</tr>
					";
				}
			}
		

		?>
       
   

