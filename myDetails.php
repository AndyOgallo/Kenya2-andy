<?php if(!isset($_SESSION)){
	session_start();
	}  
?>



<!-- for retriving data -->
				<?php 
							include('connection.php');
							$sql="SELECT * FROM users where user_id='" . $_SESSION["user_id"] . "'";
			
							$q=mysqli_query($con,$sql);
							$row=mysqli_num_rows($q);
							
							$data=mysqli_fetch_array($q);
							$user_name=$data[2];
							$email=$data[5];
							$phone=$data[6];
							

							mysqli_close($con);
				?>
<!-- for retriving data -->
<html><title >Parents' Portal</title>
<head>
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
<link rel="stylesheet"a href="style7.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<div class="login" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;">My Details</h3>
			<div class="formstyle" style="float: right;padding:20px;border: 1px solid lightgrey;margin-right:415px; margin-bottom:30px;background-color:#f3f3f8;color:#141313;">
				<form action="" method="post" class="text-center form-group">
					

					<label>
						Your Name: <input type="text" name="user_name" value="<?php echo $user_name; ?>" required>
					</label><br><br>

 					<label>
						Email: <input type="email" name="email" value="<?php echo $email; ?>"  required>
					</label><br><br>

					
					<label>
						Phone: <input type="number" name="phone" value="<?php echo $phone; ?>"  required="required" />
					</label><br><br><br>
					<button name="" type="" style="padding-right:5px;border-radius:3px;margin-right:-150px;"><a href="changepass.php">Change Password</a></button><br><br><br>
 					<label>
						
					
					
					<button name="submit" type="submit" style="margin-left:30px;width:108px;border-radius: 3px;">UpdateProfile</button> <br>

					<br><br>
					
					<br><br>
					<button name="" type="" style="padding-right:5px;border-radius:3px;margin-right:-150px;"><a href="parents.php">BACK</button></a> <br>
			</form> <br><br>

	</div>
	
	
</div>



			<!-- update information -->

				<?php

						include('connection.php');
						if(isset($_POST['submit'])){
							

							$sql="UPDATE users SET user_name='" .$_POST["user_name"]. "' ,email='" .$_POST["email"]."' , phone='" .$_POST["phone"]. "' WHERE user_id='" . $_SESSION["user_id"] . "'";
		
							if (mysqli_query($con, $sql)) {
						    echo "<script>alert(' Record updated successfully');</script>";
							} else {
							    echo "<script>alert('There was a Error Updating profile');</script>";
							}

						mysqli_close($con);
													}
					?> 
			<!-- update information End -->


 


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>



</body>
</html>
