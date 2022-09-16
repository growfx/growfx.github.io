
<?php
session_start();

	if (isset($loginBtn)) {
		# code...
		header("Location: dashboard.php");
	}else{
	include('db.php');
	include("header.php");

	if (isset($_POST['loginBtn'])) {
		$listingstyle = $_POST['listingstyle'];
		$propertyaddress = $_POST['propertyaddress'];
		$noofbedrooms = $_POST['noofbedrooms'];
		$noofbathrooms = $_POST['noofbathrooms'];
		$totalarea = $_POST['totalarea'];
		$coveredarea = $_POST['coveredarea'];
	
	

		if (empty($listingstyle) or empty($propertyaddress) or empty($noofbedrooms) or empty($noofbathrooms)or empty($totalarea)or empty($coveredarea)) {
			$msg =  "All fields are required";
		
		}else{
				$query = "INSERT INTO listing (listingstyle, propertyaddress, noofbedrooms, noofbathrooms, totalarea, coveredarea) VALUES ( '$listingstyle', '$propertyaddress', '$noofbedrooms', '$noofbathrooms', '$totalarea', '$coveredarea' )";
				$result = mysqli_query($conn, $query);
				if ($result) {
					header("Refresh:0; url=dashboard.php");
					echo "<script>alert('Listing saved, Click Ok to continue')</script>";
				}else{
					header("Refresh:0; url=post a listing.php");
					echo "<script>alert('Error in saving list')</script>";

				}
			}
			

		}



?>


   <div class="container">

   <div style="text-align: center; font-size: 30px; font-weight: bold; margin-top: 60px">
   	<p>Property details</p>
   </div>

 
      
   	<div style="margin-top: 40px; text-align: center; ">
   		<div class="card" style="width: 80%;height: 50%;  background-color: lawngreen; margin-bottom: 40px;margin-left: 100px">
    <div class="card-body">
    <h5 class="card-title">Important notice</h5>
    <p class="card-text">We do not allow the posting or marketing of properties that you do not have the legal authority to do so. Should we suspect potential scam or are reported to, we reserve the right to notify security operatives and share your information to the authorities before account is permanently closed. Thank you for your honesty. </p>
    
  </div>
</div>
   	</div>


 </div>



 

<div class="container" style="margin-bottom: 120px">

     

	<div class="container" style="margin-top: 60px; border: 1px solid lawngreen">
	

   
   
     


   <form action="register.php" method="POST">
   	  
       <?php echo "<span style='color: red; font-weight: bolder; text-align: center; font-size: 20px;'>". @$msg."</span>"; ?>
     	<div class="row" style="margin-top: 50px">
     		<div class="col-lg-4">
		         <div>
		         	<label>Listing style</label>
		         	<input class="form-control" type="text" placeholder="e.g 4 bedroom duplex" name="listingstyle">
		         </div>
		</div>





	<div class="col-lg-4">

				<div>
				  <label>Advertising For</label>
				  <select class="form-control">
				  <option>for sale</option>
				  <option>for rent</option>
				  <option>joint venture</option>
				  

				</select>
			
				</div>
			
		</div>





			<div class="col-lg-4">

				<div>
				  <label>Property Type</label>
				  <select class="form-control">
				  <option>Bungalow</option>
				  <option>Bedroom flat</option>
				  <option>mansion</option>
				  <option>Duplex</option>
				  <option>Terrace</option>
				  <option>Warehouse</option>
				  <option>Land</option>
				  <option>Shop</option>
				  <option>Factory</option>
				</select>
			
				</div>
			
		</div>

  

     </div>
     
    
     



            
            <div class="row" style="margin-top: 20px">
            	<div class="col-lg-6">

				<div>
				  <label>Use of Property</label>
				  <select class="form-control">
				  <option>Unspecified</option>
				  <option>Residential</option>
				  <option>Commercial</option>
				  <option>Religious</option>
				  <option>School</option>

				</select>
			
				</div>
			
		</div>

   
         <div class="col-lg-6">

				<div>
				  <label>Market Status</label>
				  <select class="form-control">
				  <option>Available</option>
				  <option>Coming soon</option>
				  <option>Unavailable</option>
				  <option>Sold</option>
				</select>
			
				</div>
			
		</div>

            </div>

            <hr>

			
			<div>
				<p>Provide information on location of property</p>
			</div>




     <div class="row">
        
	<div class="col-lg-4">

				<div>
				  <label>Country</label>
				  <select class="form-control">
				  <option>Nigeria</option>
				</select>
			
				</div>
			
		</div>
     



	<div class="col-lg-4">

				<div>
				  <label>State</label>
				  <select class="form-control">
				  <option disabled selected>--select--</option>
				    <option>ABUJA FCT</option>
					<option>ABIA</option>
					<option>ADAMAWA</option>
					<option>AKWA IBOM</option>
					<option>ANAMBRA</option>
					<option>BAUCHI</option>
					<option>BAYELSA</option>
					<option>BENUE</option>
					<option>BORNO</option>
					<option>CROSS RIVER</option>
					<option>DELTA</option>
					<option>EBONYI</option>
					<option>EDO</option>
					<option>EKITI</option>
					<option>ENUGU</option>
					<option>GOMBE</option>
					<option>IMO</option>
					<option>JIGAWA</option>
					<option>KADUNA</option>
					<option>KANO</option>
					<option>KATSINA</option>
					<option>KEBBI</option>
					<option>KOGI</option>
					<option>KWARA</option>
					<option>LAGOS</option>
					<option>NASSARAWA</option>
					<option>NIGER</option>
					<option>OGUN</option>
					<option>ONDO</option>
					<option>OSUN</option>
					<option>OYO</option>
					<option>PLATEAU</option>
					<option>RIVERS</option>
					<option>SOKOTO</option>
					<option>TARABA</option>
					<option>YOBE</option>
					<option>ZAMFARA</option>
				</select>
			
				</div>
			
		</div>





			<div class="col-lg-4">

				<div>
				  <label>City</label>
				  <select class="form-control">
				  <option disabled selected>--select--</option>
				</select>
			
				</div>
			
		</div>


       
         </div>

     


    <div class="row">

	<div class="col-lg-4">
		         <div>
		         	<label>Property Address</label>
		         	<input class="form-control" type="text" placeholder="E.g Taiwo road, ilorin." name="propertyaddress">
		         </div>
		</div>
         </div>





           <hr>





			
			<div>
				<p>Currency</p>
			</div>

    <div class="row">
        
	<div class="col-lg-4">

				<div>
				  <label>Currency</label>
				  <select class="form-control">
				  <option>₦-Nigerian naira</option>
				  <option>$-U.S dollar</option>
				  <option>£-British pounds</option>
				</select>
			
				</div>
			
		</div>
     






	    <div class="col-lg-4">

			   <div>
		         	<label>Price</label>
		         	<input class="form-control" type="text" placeholder="0">
		         </div>
			
		  </div>







			<div class="col-lg-4">

				<div >
				  <label>Price Per What?</label>
				  <select class="form-control">
				  <option>Not applicable</option>
				  <option>year</option>
				  <option>Unit</option>
				  <option>Half a year</option>
				  <option>Month</option>
				  <option>Plot</option>
				  <option>Hectre</option>
				</select>
			
				</div>
			
		</div>
       
  
</div>

       
     <hr>






     <div class="row">
      
	<div class="col-lg-3">

				 <div>
		         	<label>No of Bedrooms</label>
		         	<input class="form-control" type="text" placeholder="No of Bedrooms" name="noofbedrooms"  >
		         </div>
			
		</div>





			<div class="col-lg-3">

			 <div>
		         	<label>No of Bathrooms</label>
		         	<input class="form-control" type="text" placeholder="No of Bathrooms" name="noofbathrooms"  >
		         </div>
			
		</div>


        

			<div class="col-lg-3">

				 <div>
		         	<label>No of Toilets</label>
		         	<input class="form-control" type="text" placeholder="No of Toilets">
		         </div>
		
		</div>

    


       
         </div>

     

     <hr>

             <div class="row">
           	<div class="col-lg-3">
                  	
			    <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    24/7 Electricity 
				  	  </label>
				</div>
	
          </div>





       	<div class="col-lg-3">
                  	
			    <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					   Water Facility 
				  	  </label>
				</div>
	
          </div>    
    




         	<div class="col-lg-3">
                  	
			    <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					  Furnished 
				  	  </label>
				</div>
	
          </div>






          	<div class="col-lg-3">
                  	
			    <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					   Swimming Pool 
				  	  </label>
				</div>
	
          </div>



             </div>





             <div class="row">
           	<div class="col-lg-3">
                  	
			    <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					   Elevator 
				  	  </label>
				</div>
	
          </div>





             	<div class="col-lg-3">
                  	
			    <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					    Serviced 
				  	  </label>
				</div>
	
          </div>
       
   
             	<div class="col-lg-3">
                  	
			    <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					 Parking Space 
				  	  </label>
				</div>
	
          </div>



            	<div class="col-lg-3">
                  	
			    <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					   Gym 
				  	  </label>
				</div>
	
          </div>





            </div>


            <hr>


    <div class="row">
	    <div class="col-lg-3">

    
         
           <div>
		      	<label>Total Area</label>
		        <input class="form-control" type="text" placeholder="Default input" name="totalarea"  >
		      </div>
			
		</div>
     

          <div class="col-lg-3">

				<div>
				  <label>Total Area Unit</label>
				  <select class="form-control">
				  <option>Sqm</option>
				  <option>Hectre</option>
				  <option>Acre</option>
				  <option>plots</option>
				</select>
			
				</div>
		  </div>







		
    
          	<div class="col-lg-3">

           <div>
		      	<label>Covered Area</label>
		        <input class="form-control" type="text" placeholder="Default input" name="coveredarea"  >
		      </div>
			
		</div>
     


          <div class="col-lg-3">

				<div>
				  <label>Covered Area Unit</label>
				  <select class="form-control">
				  <option>sqm</option>
				  <option>Hectre</option>
				  <option>Acre</option>
				  <option>Plots</option>
				</select>
			
				</div>
			
		</div>
      
  
</div>

         
          <hr>


    <div style="text-align: right; margin-left: 80%">
    	
  <div class="form-group col-md-2" >
 <input type="submit" name="loginBtn" class="btn btn-success" value="Save and continue" style="border: 1px solid green; font-weight: bold;  color: white; ">

    </div>



  </div>

</div>
 </div>
    </div>
     </form>
 

      <div style="text-align:center; background-color:lawngreen
 ;color: white; border:20px solid lawngreen
 ;">
        <p>&copy; 2022 Smartbay properties.All rights reserved</p>
      </div>
               
       <?php
        }

       ?>   
  