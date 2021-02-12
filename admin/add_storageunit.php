<?php 
include 'dbcon.php';
	$storageunitname = $_POST['storageunitname'];
	$capacity = $_POST['capacity'];
	$prod_id = $_POST['prod_id'];
	
	
	
		mysqli_query($con,"INSERT INTO storageunits(storageunitname,capacity,prod_id) 
			VALUES('$storageunitname','$capacity','$prod_id')")or die(mysqli_error($con));  
			
			echo "<script>window.location='storage.php'</script>";   
	


?>