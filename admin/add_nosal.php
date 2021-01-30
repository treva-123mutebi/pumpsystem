<?php 
include 'dbcon.php';
	$pumpid = $_POST['pumpid'];
	$nosalnumber = $_POST['nosalnumber'];
	
	
	
		mysqli_query($con,"INSERT INTO nosals(pumpid,nosalnumber) 
			VALUES('$pumpid','$nosalnumber')")or die(mysqli_error($con));  
			
			echo "<script>window.location='nosal.php'</script>";   
	


?>