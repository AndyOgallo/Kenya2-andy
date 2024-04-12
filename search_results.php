<html><title>Parents Portal</title>

<head>
    <link rel="stylesheet"href="style7.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php if(!isset($_SESSION)){
	session_start();
	}  
?>


	<div class="search form-group"  style="background-color: #7faf81;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Hospitals Available</h3>
		
	</div>
<!-- result -->

					<?php 
					include('connection.php');
					

					$sql = " SELECT * FROM healthcenter WHERE vaccine = '" . $_POST["vaccine"]."' ";
					$result = mysqli_query($con,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='24'bgcolor='white'>
							<tr>
								<th>Hos_Id</th>
								<th>hospital_name</th>
								<th>email</th>
								
								<th>address</th>
								
								<th>category</th>
								<th>vaccine</th>
								<th>location</th>
								<th>services</th>
								<th>Book</th>
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								echo "<td>".$row['hos_id']."</td>";
								echo "<td>".$row['hospital_name']."</td>";
								echo "<td>".$row['email']."</td>";
								
								echo "<td>".$row['address']."</td>";
								echo "<td>".$row['category']."</td>";
                                echo "<td>".$row['vaccine']."</td>";
								echo "<td>".$row['location']."</td>";
								echo "<td>".$row['services']."</td>";
						?>
							<td><a href="booking.php?hos_id=<?php echo $row['hos_id'] ?>">Book</a></td>;
						<?php 		
								
								echo "</tr>";
						}
						echo "</table>";
					} 
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?><br><br>
					<!-- result -->


	<button style="margin-left: 605px;background-color:cyan;color: antiquewhite;width: 115px;height: 30px;margin-bottom: 5px;">
	<a href="search_hospital.php">Search Again</a></button>
	
 


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 


	
</body>
</html>
