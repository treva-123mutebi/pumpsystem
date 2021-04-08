<?php 
include 'dbcon.php';
	$sc_id = $_POST['sc_id'];
	$pc_code = $_POST['pc_code'];
    $unitprice = $_POST['unitprice'];
    $reorderlevel = $_POST['reorderlevel'];
	
	
	
		mysqli_query($con,"INSERT INTO productcode(sc_id,pc_code,unitprice,reorderlevel,prod_qty) 
			VALUES('$sc_id','$pc_code','$unitprice','$reorderlevel','0')")or die(mysqli_error($con));  
			
			echo "<script>window.location='productcodes.php'</script>";   
	


?>