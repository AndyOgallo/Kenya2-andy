<?php if(!isset($_SESSION)){
	session_start();
	}  
	error_reporting(E_ALL);
   ini_set('display_errors', 1);
?>


<?php 
	$hos_id = isset($_GET['hos_id'])?$_GET['hos_id']:"";
	
 ?>
				
					<?php 
					error_reporting(E_ALL);
					ini_set('display_errors', 1);
					include('connection.php');
					

							$sql="SELECT * FROM healthcenter WHERE hos_id = '$hos_id' ";
							$hospital_name ="";
							$address ="";
							$category ="";
							$vaccine ="";
							$location ="";
							$services ="";
							

							 $result = $con->query($sql);
							if ($result->num_rows > 0) {
							    // output data of each row
							    while($row  = $result->fetch_assoc()) {
							        $hos_id   = $row["hos_id"];
							        $hospital_name 	= $row["hospital_name"];
							        $address 	= $row["address"];
							        $category 	= $row["category"];
									$vaccine 	= $row["vaccine"];
									$location 	= $row["location"];
							        $services = $row["services"];
									
							    }
							}
							
							$con->close();

					?>
					<!-- fetching hospital info -->

	<!-- 	booking info-->
		<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Book Appoinment</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" >
					

					<label>
						Hospital Name : <input type="text" name="hospital_name" value="<?php echo $hospital_name; ?>" >
					</label><br><br>

 					<label>
					 Hospital Address: <input type="text" name="address" value="<?php echo $address; ?>" />
					</label><br><br>
 					
					<label>
					Hospital Category: <input type="text" name="category" value="<?php echo $category; ?>" >
					</label><br><br>

					<label>
						Vaccine: <input type="text" name="vaccine" value="<?php echo $vaccine; ?>" >
					</label><br><br>

					<label>
						location: <input type="text" name="location" value="<?php echo $location; ?>" >
					</label><br><br>

					<label>
						Services: <input type="text" name="services" value="<?php echo $services; ?>" >
					</label><br><br>
					<label>
						Your Name: <input type="text" name="pname" value=""/>
					</label><br><br>

 					<label>
						 Contact: <input type="text" name="pcontact" value=""/>
					</label><br><br>
					<label>
						 E-mail: 
						 <input type="email" name="email" value=""/>
					</label><br><br>
 					
					<label>
						 Address: <input type="text" name="address" value=""/>
					</label><br><br>
					<label>
						 Date: <input type="date" name="dates" value=""/>
					</label><br><br>
					<label>
						 Time: <select name="tyme">
										<option value="">-select-</option>
										<option value="11.00am">11.00am</option>
										<option value="03.00pm">03.00pm</option>
									</select>
					</label><br><br>
					<label>
						 Payment: <select name="payment">
										<option value="">-select-</option>
										<option value="Cash">Cash</option>
										<option value="Card">Card</option>
									</select>
					</label><br><br>
					<label>
					<input type="hidden" name="hos_id" value="<?php echo $hos_id; ?>">
					</label><br><br>
					
					<button name="submit" type="submit" style="padding-right:5px;border-radius:3px;margin-right:;">Confirm</button> 
					<a href="search_hospital.php"><button name="search" type="" style="padding-right:5px;border-radius:3px;margin-right:-150px;">Cancel</button></a> <br>


				</form> <br><br>

			</div>
	
	
		</div>
				<!-- 	booking info-->
				
			<!-- confirming booking -->


					<?php
								
						include('connection.php');
						
						if(isset($_POST['submit'])){
							

						$sql = " INSERT INTO booking (hospital_name,hos_id,address,category,vaccine,location,services, pname,pcontact,email,address,dates,tyme,payment)
							VALUES ('" . $_POST['hospital_name'] . "','" . $_POST["hos_id"] . "','" . $_POST["address"] . "','" . $_POST["category"] . "', '" . $_POST["vaccine"] . "','" . $_POST["location"] . "','" . $_POST["services"] . "','" . $_POST["pname"] . "','". $_POST["pcontact"] . "','". $_POST["email"] . "','". $_POST["address"] . "','". $_POST["dates"] . "','". $_POST["tyme"] . "','". $_POST["payment"] . "' )";

							if ($con->query($sql) === TRUE) {
							    echo "<script>alert('Your booking has been accepted!');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>";
							}

							$con->close();
						}
					?>

</div>




<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
