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

				<!-- confirming booking -->