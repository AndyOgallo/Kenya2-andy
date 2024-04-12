<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		$hospital_name = $_POST['hospital_name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$address = $_POST['address'];
		$contact = $_POST['contact'];
		$category = $_POST['category'];
		$vaccine = $_POST['vaccine'];
		$location = $_POST['location'];
		$services = $_POST['services'];

		if(!empty($hospital_name) && !empty($password) && !is_numeric($hospital_name))
		{

			//save to database
			$hos_id = random_num(20);
			
			$query = "insert into healthcenter (hos_id,hospital_name,password,email,address,contact,category,vaccine,location,services) values ('$hos_id','$hospital_name','$password','$email','$address','$contact','$category','$vaccine',$location','$services')";


			mysqli_query($con, $query);

			//header("Location: login.php");
			//die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
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

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">REGISTER</div>

			<label><input id="text" type="text" name="hospital_name"placeholder="Hospital name"></label><br><br>
			<label><input id="text" type="password" name="password"placeholder="password"></label><br><br>
			<label><input id="text" type="email" name="email"placeholder="Email"></label><br><br>
			<label><input id="text" type="text" name="address"placeholder="Address"></label><br><br>
			<label><input id="text" type="text" name="contact"placeholder="Contact"></label><br><br>
			<label>
						 <select name="category" required>
										<option>-Category-</option>
										<option>Public</option>
										<option>Private</option>
										<option>Specialists</option>
                                        <option>Other</option>
									</select>
					</label><br><br>
					<label><input id="text"type="text"name="vaccine"placeholder="Vaccine"></label><br><br>
			<label><input id="text" type="text" name="location"placeholder="location"></label><br><br>
			<label>
						 <select name="services" required>
										<option>-Services-</option>
										<option>Out-Patient</option>
										<option>In-Patient</option>
										<option>Specialists</option>
                                        <option>Other</option>
									</select>
					</label><br><br>


			<input id="button" type="submit" value="REGISTER"><br><br>
            <p style="color:white;">Already have an Account?</p>
			<a href="healthlogin.php"class="hero-btn">Click to Login</a>
            <a href="Home.php"class="hero-btn">CANCEL</a><br><br>
		</form>
	</div>
</body>
</html>