<?php 
include 'dbcon.php';
	$stunit_id = $_POST['stunit_id'];
    $closinginvoice = $_POST['closinginvoice'];
    $lastdipp = $_POST['lastdipp'];
	//$prod_id = $_POST['prod_id'];
	
	
	
		mysqli_query($con,"INSERT INTO lastclosinginvoice(stunit_id,closinginvoice,lastdipp) 
			VALUES('$stunit_id','$closinginvoice','$lastdipp')")or die(mysqli_error($con));  
			
            echo "<script type='text/javascript'>alert('A new Tank reading has been set');</script>";   
            echo "<script>window.location='initialtankmeter.php'</script>";
            
	


?>