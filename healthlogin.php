<?php 

session_start();

	include("connection.php");
	include("functions.php");


	if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
		$hospital_name = $_POST['hospital_name'];
		$password = $_POST['password'];

		if(!empty($hospital_name) && !empty($password) && !is_numeric($hospital_name))
		{

			//read from database
			$query = "select * from healthcenter where hospital_name = '$hospital_name' limit 1";
			$result = mysqli_query($con, $query);

			if($result)
			{
				if($result && mysqli_num_rows($result) > 0)
				{

					$user_data = mysqli_fetch_assoc($result);
					
					if($user_data['password'] === $password)
					{

						$_SESSION['hos_id'] = $user_data['hos_id'];
						header("Location: hospitals.php");
						die;
					}
				}
			}
			
			echo "wrong username or password!";
		}else
		{
			echo "wrong username or password!";
		}
	}

?>


<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
    <link rel="stylesheet"a href="style4.css">
	<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.2/css/fontawesome.min.css">
<link rel="stylesheet"a href="style4.css">
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

		background-color: grey;
		margin: auto;
		width: 300px;
		padding: 20px;
	}

	</style>

	<div id="box">
		
		<form method="post">
			<div style="font-size: 20px;margin: 10px;color: white;">Login</div>

			<input id="text" type="text" name="hospital_name"placeholder="Hospital Name"><br><br>
			<input id="text" type="password" name="password"placeholder="password"><br><br>

			<input id="button" type="submit" value="Login"><br><br>
            <p style="color:white;">Don't have an Account?</p>
            <a href="health.php"class="hero-btn">Click to Register</a>
            <a href="Home.php"class="hero-btn">CANCEL</a>

			
		</form>
	</div>
</body>
</html>