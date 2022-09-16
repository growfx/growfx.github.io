<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>home</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>






<div style="background-color:lawngreen;">
  <nav style=" margin: 0px; background-color: black;" class="navbar navbar-expand-lg navbar-none bg-none">
<!--   <a class="navbar-brand" href="index.php">Navbar</a> -->
  <a href="index.php"><img style="margin-left:0px" src="p4.png" width="80%"> </a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a style="margin-left:100px; color:white; text-transform: uppercase; border: 5px solid lawngreen
   ; padding:0 15px; border-radius: 8px; background-color:lawngreen
   ;line-height: 35px; font-weight:400;font-weight:bolder;"  class="nav-link" href="for sale.php">For sale<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a style="color:lawngreen
   ;font-weight: bolder; margin-left: 30px; text-transform: uppercase; line-height: 35px; font-weight:400;font-weight:bolder; color: white" class="nav-link" href="for rent.php">For rent</a>
      </li>
      
      
        <li class="nav-item">
        <a style="color:lawngreen
   ; margin-left: 30px; text-transform: uppercase;line-height: 35px; font-weight:400;font-weight:bolder; color: white" class="nav-link disabled" href="post a listing.php">Post a listing</a>
      </li>
        <li class="nav-item">
        <a style="color:lawngreen
   ; margin-left: 30px; text-transform: uppercase;line-height: 35px; font-weight:400;font-weight:bolder;color: white" class="nav-link disabled" href="property request.php">property request</a>
      </li>
      
        <li class="nav-item">
        <a style="color:lawngreen
   ; margin-left: 30px; text-transform: uppercase;line-height: 35px; font-weight:400;font-weight:bolder;color: white" class="nav-link disabled" href="dashboard.php">Dashboard</a>
      </li>
      

      
  </div>
</nav>
</div>

</div>






  <div style="background: url(p1.jpg);">
    <div class="container">
     <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <h3 style="color:white;text-align: center; font-weight:bold; margin-top:60px; margin-left: 40px; margin-bottom: 20px; font-size: 40px ">Smartbay Properties Search</h3>
          <ol>
            <li style="list-style:none;color: white;text-decoration: none; text-align: center; margin-bottom: 30px; font-size: 20px "> <a style="color:white; text-decoration: none" href="">Your trusted and complete source for real estate in Nigeria</a></li>
          </ol>

         


        <div class="container">
          <div style="text-align: center;margin-top: 60px; margin-bottom: 60px">
            <a href="For sale.php" style="color: white; list-style: none; font-weight: bold; text-decoration: none; border: 10px solid black; background-color: black; font-size: 20px; padding: 2px 35px 2px 35px">Buy</a> <a href="for rent.php"style="color: white; list-style: none; font-weight: bold;text-decoration: none; border: 10px solid black; background-color: black; font-size: 20px; padding: 2px 35px 2px 35px">Rent</a> <a href="for sale.php" style="color:white; font-weight: bold; list-style: none; text-decoration: none; border: 10px solid black; background-color: black; font-size: 20px; padding: 2px 35px 2px 35px">Land</a>
          </div>
        </div>
   



    
        
    <form  class="container" method="POST">
                <div class="input-group mb-3">
                <input type="text" name="search" class="form-control" placeholder="city, state or listing preference" aria-label="Recipient's username" aria-describedby="basic-addon2">
  <div style="margin-right:50px"class="input-group-append">
              <button class="btn btn-inline-primary" name="submit" style="background-color:lawngreen;color: white;" type="button">Search</button>
       </div>
  </div>
  
   </form>

        


              </div>
        </div>
     </div>
</div>



      




    <?php

    include("houses.php")
   


    ?>

    <hr>


    <div class="container" style="margin-bottom: 60px">
      <div class="row">
        <div class="col-lg-6">
          <p style="text-align: center; font-size: 20px; font-family: monospace; margin-bottom: 10px; margin-top: 50px">Post a listing</p>
          <p style="text-align: justify;">Smartbay allows you as an individual or a house agent to provide detailed information about a propety you plan to sell or rent on advertisement. </p>
          <button class="btn btn-outline-success" style="background-color:white;color: lawngreen; margin-left: 220px; font-weight: bold;" type="button">post a listing</button>
           
        </div>





        <div class="col-lg-6">
          <p style="text-align: center; font-size: 20px; font-family: monospace; margin-bottom: 10px; margin-top: 50px">Request for a property</p>
          <p style="text-align: justify;">Make a detailed request on the type of property you will like to acquire and we shall show you properties that meets your information. </p>
          <button class="btn btn-outline-success" style="background-color:white;color: lawngreen; margin-left: 220px; font-weight: bold;" type="button">Property request</button>
           
        </div>



      </div>
    </div>



     <hr>
 
     <div style="text-align: center; font-size: 30px; font-family: sans-serif; font-weight: bold; margin-top: 70px">
        <p>Find your needle in a haystack.</p>
     </div>
     


        <div class="container" style="margin-bottom: 80px">
      <div class="row" >

        <div class="col-lg-6">
          <p style="text-align: center; font-size: 20px; font-family: monospace; margin-bottom: 10px; margin-top: 50px;"><i class="fa fa-phone fa15x">    Find genuine real estate brokers</p></i>
          <p style="text-align: justify;">Curated list of reputable real estate agents you can consult for professional services </p>
          
        </div>

           <div class="col-lg-6">
          <p style="text-align: center; font-size: 20px; font-family: monospace; margin-bottom: 10px; margin-top: 50px"><i class="fa fa-bell fa15x">     Be the first to know</p></i>
          <p style="text-align: justify;">Intelligent, non-intrusive on-time notification when your most ideal home or house comes to market. </p>
          
        </div>

    
      </div>

    

          <div class="row">

        <div class="col-lg-6">
          <p style="text-align: center; font-size: 20px; font-family: monospace; margin-bottom: 10px; margin-top: 50px; "><i class="fa fa-search fa10x">  search for properties with ease.</p></i>
          <p style="text-align: justify;">Make a detailed request on the type of property you will like to acquire and we shall show you properties that meets your information. </p>
          
        </div>

           <div class="col-lg-6">
          <p style="text-align: center; font-size: 20px; font-family: monospace; margin-bottom: 10px; margin-top: 50px;"><i class="fa fa-globe fa15x">  Make informed decision</p></i>
          <p style="text-align: justify;">Buying or renting a property is a critical decision. Be armed with enough and relevant information </p>
          
        </div>

    
      </div>





    </div>

   

 
    <?php
   include("footer.php")

    ?>






























   
   <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
 
</body>
</html>