<html><title >REACH US</title>
<head>
<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
<link rel="stylesheet"href="style7.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

      <body>
	  <style type="text/css">
	
	#text{

		height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin #aaa;
		width: 100%;
	}

	#button{

		padding: 10px;
		width: 100px;
		color: white;
		background-color: lightblue;
		border: none;
	}

	#box{

		background-color: green;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>
	<div id="box">
	<div style="font-size: 20px;margin: 10px;color: white;">Contact Us</div>
	<div class="contactus"  style="background-color:grey;">
		
	
		
		
		<div class="main_content">
			<div class="col-md-6" style="border-right: 2px solid black;">
				<article>
					
				</article>
			</div>
			<div class="col-md-6">
				<h2 class="text-center">Your Message</h2>
				<form action="" method="post" class="text-center">
						<label>
						 <input type="text" name="firstname" value="" placeholder="firstname" required>
						</label><br><br>

						<label>
						<input type="text" name="lastname" value="" placeholder="lastname" required>
						</label><br><br>	

						<label>
							<input type="email" name="email"  value="" placeholder="Your email" required>
						</label><br><br>
						<label>
								<textarea name="comment" id="" cols="30" rows="4"placeholder="Your Comment" required> </textarea> 
						</label><br><br>
								
						<input type="submit" value="Send" name="submit" style="margin-top: 75px;border-radius: 1px;"/>
						<!-- <button name="submit" type="submit" class="btn btn-info"><i class="icon-signin icon-large"></i>&nbsp;Sign Up</button>
 -->
					</form><br><br><br>
			</div>

          
 		</div>

	</div>

	<br><br>
	<a href="parents.php"class="hero-btn">BACK</a>
	
	

	



	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
<!-- contact information inserting -->
					<?php

						include('connection.php');
						if(isset($_POST['submit'])){
							

							$sql = "INSERT INTO contact (firstname, lastname,email,comment)
							VALUES ('" . $_POST["firstname"] ."','" . $_POST["lastname"] . "','" . $_POST["email"] . "','" . $_POST["comment"] . "' )";

							if ($con->query($sql) === TRUE) {
							    echo "<script>location.replace('Home.php');</script>";
							} else {
							    echo "<script>alert('There was an Error')<script>" . $sql . "<br>" . $conn->error;
							}

							$conn->close();
						}
					?> 



	
</body>
</html>

