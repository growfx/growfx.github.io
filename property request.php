  
<?php
session_start();

	if (isset($loginBtn)) {
		# code...
		header("Location: dashboard.php");
	}else{
	include('db.php');
	include("header.php");
	

	if (isset($_POST['loginBtn'])) {
		$propertytype = $_POST['propertytype'];
		$city = $_POST['city'];
		$noofbedrooms = $_POST['noofbedrooms'];
		$name = $_POST['name'];
		$phonenumber = $_POST['phonenumber'];
	
	

		if (empty($propertytype) or empty($city) or empty($noofbedrooms) or empty($name)or empty($phonenumber)) {
			$msg =  "All fields are required";
		
		}else{
				$query = "INSERT INTO request (propertytype, city, noofbedrooms, name, phonenumber) VALUES ('$propertytype', '$city', '$noofbedrooms', '$name', '$phonenumber')";
				$result = mysqli_query($conn, $query);
				if ($result) {
					header("Refresh:0; url=dashboard.php");
					echo "<script>alert('Request saved, Click Ok to continue')</script>";
				}else{
					header("Refresh:0; url=property request.php");
					echo "<script>alert('Error in saving request')</script>";

				}
			}
			

		}



?>

     <div style="text-align: center; font-size: 30px; font-weight: bold; margin-top: 60px">
   	<p>Post a Property Request</p>
   </div>



   	<div style="margin-top: 40px; text-align: center; margin-left: 100px">
   		<div class="card" style="width: 80%;height: 100% margin-top: 40px; background-color: lawngreen;margin-left: 100px">
    <div class="card-body"> 
    <p class="card-text">Fill this form to top estate agents help you with your property request. The more detailed your request, the better we can channel your request to the appropriate estate agents who can attend to you.  </p>
    
  </div>
</div>
   	</div>
    


 </div>


     

     <div class="container" style="margin-top: 60px; border: 1px solid teal ">
          <form method="POST" action="property request.php">
           <?php echo "<span style='color: red; font-weight: bolder; text-align: center; font-size: 20px;'>". @$msg."</span>"; ?>
          
		<div class="row" style="margin-top: 30px">
		<div class="col-lg-4">

							<div>
							  <label>I need a property for:</label>
							  <select class="form-control">
								  <option>Unspecified</option>
								  <option>Residential</option>
								  <option>Commercial</option>
								  <option>Religious</option>
								  <option>School</option>

							  

							</select>
						
							</div>
						
					</div>





						<div class="col-lg-4">

							<div>
							  <label>Property Type</label>
							  <select class="form-control" name="propertytype">
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

						<div class="col-lg-4">

							<div>
							  <label>Available For</label>
							  <select class="form-control">
							  <option>for sale</option>
							  <option>for rent</option>
							  <option>joint venture</option>
							  

							</select>
						
							</div>
						
					</div>


			  
			</div>


			<div class="row" style="margin-top: 30px">
					<div class="col-lg-6">

							<div>
							  <label>State</label>
							  <select class="form-control">
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

                   

			<div class="col-lg-6">
		                 <div>
				         	<label>City</label>
				         	<input class="form-control" type="text" placeholder="E.g ilorin" name="city">
				         </div>
								

			</div>
           </div>

			
    <div class="container">
    	<hr>



     <div class="row" style="margin-top: 30px">
	<div class="col-lg-4">

				 <div>
		         	<label>No of Bedrooms (optional)</label>
		         	<input class="form-control" type="text" placeholder="No of Bedrooms" name="noofbedrooms">
		         </div>
			
		</div>





			<div class="col-lg-4">

			 <div>
		         	<label>No of Toilets (optional)</label>
		         	<input class="form-control" type="text" placeholder="No of Toilets">
		         </div>
			
		</div>


        

			<div class="col-lg-4">

				 <div>
		         	<label>No of Bathrooms (optional)</label>
		         	<input class="form-control" type="text" placeholder="No of Bathrooms">
		         </div>
		
		</div>

   
       
         </div>



          <div class="row" style="margin-top: 30px">
        	<div class="col-lg-3">

				 <div>
		         	<label>My Budget is</label>
		         	<input class="form-control" type="text" placeholder="0">
		         </div>
		
		</div>

             	<div class="col-lg-3">

							<div>
							  <label>Currency</label>
							  <select class="form-control">
							  <option>₦-Nigerian naira</option>
							  <option>$-U.S dollar</option>
							  <option>£-British pounds</option>

							</select>
						
							</div>
						
					</div>



						<div class="col-lg-3">

							 <div>
					         	<label>I need this on or before</label>
					         	<input class="form-control" type="text" placeholder="DD YY MM">
					         </div>
		              </div>




             	<div class="col-lg-3">

							<div >
							  <label>Budget is per</label>
							  <select class="form-control" >
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
     	</div>

         
    

    



       
       <hr>


          
         <div class="form-group" style="margin-top: 30px">
    <label for="exampleFormControlTextarea1">Comment (optional)</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
  
    <hr>



                     <div class="row" style="margin-top: 30px">

                        	<div class="col-lg-4">

							 <div>
					         	<label>Your Name</label>
					         	<input class="form-control" type="text" placeholder="Your Name" name="name">
					         </div>
		              </div>
 



						<div class="col-lg-4">

							 <div>
					         	<label>Phone No</label>
					         	<input class="form-control" type="text" placeholder="Phone No" name="phonenumber">
					         </div>
		              </div>
 





						<div class="col-lg-4">

							 <div>
					         	<label>Your Email</label>
					         	<input class="form-control" type="text" placeholder="E-mail" name="email">
					         </div>
		              </div>

            

                 </div>





                   <div class="row" style="margin-top: 30px">
           	<div class="col-lg-6">
                  	
			    <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					  I am the one who directly need this property 
				  	  </label>
				</div>
	
          </div>





       	<div class="col-lg-6">
                  	
			    <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					   I am a real estate agent / professional  
				  	  </label>
				</div>
	
             </div>    
    </div>



              <div class="row">
		         	<div class="col-lg-6">
		                  	
					    <div class="form-check">
							  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
							  <label class="form-check-label" for="defaultCheck1">
							 Notify me when a new property matches this request 
						  	  </label>
						</div>
			
          </div>






          	<div class="col-lg-6">
                  	
			    <div class="form-check">
					  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
					  <label class="form-check-label" for="defaultCheck1">
					 I prefer only phone call 
				  	  </label>
				</div>
	
          </div>



             </div>



 

             <hr>


				    <div style="text-align: right; margin-left: 80%; ">
				    	
				  <div class="form-group col-md-2" >
				  <input type="submit" name="loginBtn" class="btn btn-success" value="Save and continue" style="border: 1px solid green; font-weight: bold;  color: white; ">


				    </div>

     </div>

      </form>

      </div>




       <div style="text-align:center; background-color:lawngreen
 ;color: white; border:20px solid lawngreen; margin-top: 80px;">
        <p>&copy; 2022 Smartbay properties.All rights reserved</p>
      </div>


   <?php
     }

   ?>
