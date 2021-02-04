<?php 
include 'dbcon.php';
	$pumpid = $_POST['pumpid'];
	$nosalnumber = $_POST['nosalnumber'];
	$prod_id = $_POST['prod_id'];
	
	
	
		mysqli_query($con,"INSERT INTO nosals(pumpid,nosalnumber,prod_id) 
			VALUES('$pumpid','$nosalnumber','$prod_id')")or die(mysqli_error($con));  
			
			echo "<script>window.location='nosal.php'</script>";   
	


?>