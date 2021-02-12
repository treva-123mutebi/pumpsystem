<?php 
include 'dbcon.php';
	$nosal_id = $_POST['nosal_id'];
	$closemeter = $_POST['closemeter'];
	//$prod_id = $_POST['prod_id'];
	
	
	
		mysqli_query($con,"INSERT INTO lastclosingmeter(nosal_id,closemeter) 
			VALUES('$nosal_id','$closemeter')")or die(mysqli_error($con));  
			
            echo "<script type='text/javascript'>alert('A new Open meter reading has been set');</script>";   
            echo "<script>window.location='initialnosalmeter.php'</script>";
            
	


?>