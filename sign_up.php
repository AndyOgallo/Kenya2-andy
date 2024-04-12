<?php 
session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$user_name = $_POST['user_name'];
		$password = $_POST['password'];
		$email = $_POST['email'];
		$phone = $_POST['phone'];
		

		if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
		{

			//save to database
		
		
			$user_id = random_num(20);
			$query = "insert into users (user_id,user_name,password,email,phone) values ('$user_id','$user_name','$password','$email','$phone')";

			mysqli_query($con, $query);

			header("Location: log_in.php");
			die;
		}else
		{
			echo "Please enter some valid information!";
		}
	}
?>


<!DOCTYPE html>
<html>
<head>
	<title>REGISTER</title>
    <link rel="stylesheet"a href="style4.css">
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

		   <input id="text" type="text" name="user_name"placeholder="user_name"alphaspaceonly="true"minlength = "6" maxlength ="20"><br><br>
			<input id="text" type="password" name="password"placeholder="password" minlength = "8" maxlength ="20"><br><br>
			<input id="text" type="email" name="email"placeholder="Email"><br><br>
			<input id="text" type="text" name="phone"placeholder="Phone"><br><br>

			<input id="button" type="submit" value="REGISTER"><br><br>
            <p style="color:white;">Already have an Account?</p>
			<a href="log_in.php"class="hero-btn">Click to LOGIN</a>
            <a href="Home.php"class="hero-btn">CANCEL</a><br><br>
		</form>
	</div>
</body>
</html>