<html><head><title>Comments</title>
<link rel="stylesheet"href="style1.css">

</head>
<body>
    <div class="container">
    <form action="" method="post" class="text-center">
        
       <H3>WE VALUE YOUR FEED BACK</H3>
    <p>Leave Your thought here</p>
    <input type="text"id="name"name="first_name"placeholder="Your First Name"required>
    <input type="text"id="name"name="last_name"placeholder="Your Last Name">
   
    <input type="email"id="email"name="email"placeholder="Email"required>
    <input type ="text"id="phone"name="phone"placeholder="Phone"required>
    <textarea id="message"rows="4"name="issue"placeholder="Comment, compliment or any other"></textarea>
    <button type="submit"class="btn"value="SUBMIT"name="save">SEND</button>
    </form>
    </div>

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

    </body></html>