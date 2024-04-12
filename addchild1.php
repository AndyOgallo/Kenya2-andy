<?php if(!isset($_SESSION)){
	session_start();
	}  
?>


<html><title>PARENTS' PORTAL</title>

<head>
    <link rel="stylesheet"href="style7.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>



	<!-- this is for donor registraton -->
	<div class="recipient_reg" style="background-color:#272327;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;align:center;">Add child</h3>

		<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:320px; margin-bottom:30px;background-color: #101011;color:#d4530d;;">
		<form enctype="multipart/form-data" method="post" class="text-center" style="margin-left: 110px">
			 <div class="col-md-12">
				  
			 		<label>
					    <input type="text" name="child_id" value="" placeholder="child_id" required>
					</label><br><br>
					<label>
					    <input type="text" name="name" value="" placeholder="Full name" required>
					</label><br><br>
                    <label>
						 <select name="bloodgroup" required>
										<option>-Bloodgroup-</option>
										<option>O+</option>
										<option>O-</option>
										<option>A-</option>
										<<option>B-</option>
										<option>B+</option>
										<option>A+</option>
										<option>AB+</option>
										<option>AB-</option>
                                    </select>
					</label><br><br>
					<label>
						 <input type="number" name="age" value="" placeholder="Age" required>
					</label><br><br>

					<label>
						 <input type="text" name="gender"  value="" placeholder="Gender" required>
					</label><br><br>
					
					<label>
						 <select name="vaccine" required>
										<option>-Vaccine-</option>
										<option>BCG</option>
										<option>MEASLES</option>
										<option>DPT</option>
										<<option>POLIO</option>
										<option>YELLOW FEVER</option>
										<option>ROTARIX</option>
										<option>GENERAL CHECK UP</option>
									</select>
					</label><br><br>
					<label>
					     <input type="text" name="weight" value="" placeholder="Weight" required>
					</label><br><br>
					<label>
					   <input type="text" name="height" value="" placeholder="height" required>
					</label><br><br>
					
					
					<button name="submit" type="submit" style="margin-left:148px;margin-top: 4px;width:95px;border-radius: 3px;height: 30px">Add</button> <br>
					<button name="" type="" style="align-items:right;margin-left:148px;margin-top: 4px;width:95px;border-radius: 3px;height: 30px"><a href="parents.php">BACK</a></button> <br>
				
			</div>	<!-- col-md-12 -->


				</form>
			</div>




	</div>
	
	

 <!-- validation and insertion -->


			<?php
						include('connection.php');
						if(isset($_POST['submit'])){
							

							$sql = "INSERT INTO child (child_id,name,bloodgroup,age,gender,vaccine,weight,height)
						VALUES ('" . $_POST["child_id"] ."','" . $_POST["name"] . "','" . $_POST["bloodgroup"] . "','" . $_POST["age"] . "','" . $_POST["gender"] . "', '" . $_POST["vaccine"] . "','" . $_POST["weight"] . "','" . $_POST["height"] . "' )";	

							if ($con->query($sql) === TRUE) {
							    echo "<script>alert('New child Has been Added Successfully!');</script>";
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