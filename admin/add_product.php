<?php 
include 'dbcon.php';
	$stationprod_name = $_POST['product_name'];
	
	
	
		mysqli_query($con,"INSERT INTO stproducts(product_name) 
			VALUES('$stationprod_name')")or die(mysqli_error($con));  
			
			echo "<script>window.location='products.php'</script>";   
	


?>