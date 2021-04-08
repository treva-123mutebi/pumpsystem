<?php 
include 'dbcon.php';
	$sc_name = $_POST['sc_name'];
	$stpd_id = $_POST['stpd_id'];
	
	
	
		mysqli_query($con,"INSERT INTO pdsubcat(sc_name,stpd_id) 
			VALUES('$sc_name','$stpd_id')")or die(mysqli_error($con));  
			
			echo "<script>window.location='subcategories.php'</script>";   
	


?>