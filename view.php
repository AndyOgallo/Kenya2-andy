<?php if(!isset($_SESSION)){
	session_start();
	}  
?>

<html><title>PARENTS' PORTAL</title>

<head>
    <link rel="stylesheet"href="style7.css">

	<div class="dashboard" style="background-color:#fff;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">My Child Data</h3>
		
		
	</div>
		
			<div class="all_user" style="margin-top:0px; margin-left: 40px;">
				<?php 
					include('connection.php');

					$sql = " SELECT * FROM child";
					$result = mysqli_query($con,$sql);
					$count = mysqli_num_rows($result);

					if($count>=1){
						echo "<table border='1' align='center' cellpadding='32'bgcolor='white'>
							<tr>
								
								
								<th>Name</th>
								<th>Bloodgroup</th>
								<th>Age</th>
								<th>gender</th>
								<th>vaccine</th>
                                <th>Weight</th>

								<th>Height</th>
								
								
							</tr>";
						while($row=mysqli_fetch_array($result)){
								echo "<tr>";
								// echo "<td>".$row['doctor_id']."</td>";
								echo "<td>".$row['Name']."</td>";
								
								echo "<td>".$row['Bloodgroup']."</td>";
								echo "<td>".$row['Age']."</td>";
								echo "<td>".$row['Gender']."</td>";
								echo "<td>".$row['Vaccine']."</td>";
								
								echo "<td>".$row['Weight']."</td>";
								echo "<td>".$row['Height']."</td>";
								echo "</tr>";
						}
						echo "</table>";
					}
					else{
						print "<p align='center'>Sorry, No match found for your search result..!!!</p>";
					}

					?>
			</div>
		<a href="parents.php">BACK</a>
	
	
	

	
 


	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>


 
			



	
</body>
</html>
