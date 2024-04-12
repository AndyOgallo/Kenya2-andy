<html><title>Parents Portal</title>

<head>
    <link rel="stylesheet"href="style7.css">
    <link rel="stylesheet"href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<?php 
if(!isset($_SESSION)){
	session_start();
	}  
?>


    
     <?php include('connection.php'); ?>




	<div class="search" style="background-color:;">
		<h3 class="text-center" style="background-color:#272327;color: #fff;padding: 5px;">Search Here</h3>

		 <div class="formstyle" style="padding:70px;border: 1px solid lightgrey;margin-right: 293px;margin-bottom: 30px;background-color:#f3f3f8;color:#141313;width: 530px;margin-left: 400px;">
					<form action="search_results.php" method="post" class="form-group">
						<h3>Select the type of vaccine you want to view nearby hospitals that offer it</h3><br><br><br><br><br><br>

					<label>
						 Vaccine:<select name="vaccine" type="text" style="width: 110px;margin-right: 175px;">
												<option>-Select-</option>
												<option>polio</option>
												<option>BCG</option>
												<option>Measles</option>
												<option>Hepatitis B</option>
												<option>Yellow Fever</option>
												<option>DPT</option>
												<option>Pcv</option>
												<option></option>
												
											</select>

					</label>
					<button name="submit" type="submit" style="border-radius: 3px;color:#000;margin-left: 145px;margin-top: 8px;">Search</button>
					<br>
					
					</form>



					
		 	</div>
	</div>
	
	

	



	
	</div><!--  containerFluid Ends -->




	<script src="js/bootstrap.min.js"></script>




</body>
</html>