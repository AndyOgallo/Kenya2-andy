<?php if(!isset($_SESSION)){
	session_start();
	}  
?>


<html><title>Vaccines</title>

<head>
    <link rel="stylesheet"href="style7.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>



	<!-- this is for donor registraton -->
	<div class="recipient_reg" style="background-color:#272327;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;align:center;">Add Vaccine</h3>

		<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:320px; margin-bottom:30px;background-color: #101011;color:#d4530d;;">
		<form enctype="multipart/form-data" method="post" class="text-center" style="margin-left: 110px">
			 <div class="col-md-12">
				  
			 		<label>
					    <input type="text" name="vaccine_name" value="" placeholder="Vaccine name" required>
					</label><br><br>
					
                    <label>
						 <select name="age" required>
										<option>- age-</option>
										<option>0-2 years</option>
										<option>2-6 years-</option>
										<option>6-10 years-</option>
										<<option>10-15 years-</option>
										<option>Above 15 years</option>
										
                                    </select>
					</label><br><br>
					
					
					<label>
						 <select name="time_administered" required>
										<option>-Time-</option>
										<option>At Birth</option>
										<option>1-3 months</option>
										<option>4-6 months</option>
										<<option>7-12 months</option>
										<option>1 -2 years</option>
										<option>5-10 years</option>
										<option>Over 10 years</option>
									</select>
					</label><br><br>

                    <label>
						 <select name="status" required>
										<option>-Status-</option>
										<option>Available</option>
										<option>Out Of stock</option>
										<option>Newly-introduced</option>
										<<option>Expired</option>
										<
									</select>
					</label><br><br>
					
					
					
					<button name="submit" type="submit" style="margin-left:148px;margin-top: 4px;width:95px;border-radius: 3px;height: 30px">Add</button> <br>
					<button name="" type="" style="align-items:right;margin-left:148px;margin-top: 4px;width:95px;border-radius: 3px;height: 30px"><a href="hospitals.php">BACK</a></button> <br>
					<button name="" type="" style="align-items:right;margin-left:148px;margin-top: 4px;width:95px;border-radius: 3px;height: 30px"><a href="vaccinces.php">IMMUNIZATION CHART</a></button> <br>
				
			</div>	<!-- col-md-12 -->


				</form>
			</div>




	</div>
	
	

 <!-- validation and insertion -->


			<?php
						include('connection.php');
						if(isset($_POST['submit'])){
							

							$sql = "INSERT INTO vaccine (vaccine_name,age,time_administered,status)
						VALUES ('" . $_POST["vaccine_name"] ."','" . $_POST["age"] . "','" . $_POST["time_administered"] . "','" . $_POST["status"] . "')";	

							if ($con->query($sql) === TRUE) {
							    echo "<script>alert('New vaccine Has been Added Successfully!');</script>";
							} else {
							    echo "<script> alert('There was an Error')</script>";
							}

							$con->close();
						}
					?> 



	<!-- validation and insertion End-->

	
	


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


	



</body>
</html>