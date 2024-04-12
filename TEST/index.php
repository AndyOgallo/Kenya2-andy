<!DOCTYPE html>
<html>
<head>
	<title>Image Upload</title>
	<link rel="stylesheet"href="style.css">
	<style>
		body {
			display: flex;
			justify-content: center;
			align-items: center;
			flex-direction: column;
			min-height: 100vh;
		}
	</style>
</head>
<body bgcolor="cyan">
	<h1>CHOOSE THE IMAGE TO UPLOAD</h1>
	<?php if (isset($_GET['error'])): ?>
		<p><?php echo $_GET['error']; ?></p>
	<?php endif ?>
     <form action="upload.php"
           method="post"
           enctype="multipart/form-data">

           <input type="file" 
                  name="my_image"><br><br><br>

           <input type="submit" 
                  name="submit"
                  value="Upload"><br><br><br>
     	
     </form>
	 <?php include "footer.php"?>
</body>
</html>