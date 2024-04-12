<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<?php include('functions.php'); ?>



	<!-- this is for donor registraton -->
	<div class="recipient_reg" style="background-color:#272327;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">Booking Appoinment</h3>

		<div class="formstyle" style="float: right;padding:25px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color: #101011;color:#d4530d;;">
		<form enctype="multipart/form-data" method="post" class="text-center">
			 <div class="col-md-12">
				  
			 		

					<label>
						user_name: <input type="text" name="user_name"  value="" placeholder="user_name" required>
					</label><br><br>
					
					<label>
						password: <input type="password" name="password"  placeholder="password"/>
					</label><br><br>
 					
 					<label>
						Email: <input type="email" name="email" value="" placeholder="Email" required>
					</label><br><br>
					<label>
                    Date: <input type="date" name="date" placeholder="choose ur date" >	
					</label><br><br>
                    <label>
						Phone: <input type="number" name="phone"  placeholder="contact no" required="required" pattern="[0-9]{10,11}" title="please enter only numbers between 10 to 11 for mobile no."/>
					</label><br><br>
 					
						
					</label><br><br>
                    Category: <select name="category" required>
										<option>-Select-</option>
										<option>Private</option>
										<option>public</option>
										<option>Specialists</option>
										<option>Other</option>
								
									</select>
					</label><br><br>
					<label>
						vaccine: <select name="vaccine" required>
										<option>-Select-</option>
										<option>Polio </option>
										<option>BCG</option>
										<option>Mealses</option>
										
									</select>
					</label><br><br>
					
					
					<button name="submit" type="submit" style="margin-left:60px;width: 85px;border-radius: 3px;">Check</button> <br>
				
			</div>	<!-- col-md-12 -->


				</form>
			</div>




	</div>
	
	



	
	



	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


	 <!-- validation and insertion -->


			<?php
						
							include('connection.php');
							if(isset($_POST['submit'])){

							$sql = "INSERT INTO users (user_name,password,email,date,phone)
							VALUES ('" . $_POST["user_name"] . "','" . $_POST["password"] . "','" . $_POST["email"] . "','" . $_POST["date"] . "', '" . $_POST["phone"] . "')";

							if ($con->query($sql) === TRUE) {
							    echo "<script>location.replace(success.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $con->error;
							}

							$con->close();
						}
					?> 



	<!-- validation and insertion End-->



</body>
</html>