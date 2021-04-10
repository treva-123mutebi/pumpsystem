<?php 
include 'dbcon.php';
	$sc_id = $_POST['sc_id'];
	$pc_code = $_POST['pc_code'];
    $unitprice = $_POST['unitprice'];
    $reorderlevel = $_POST['reorderlevel'];
	$supplier_id = $_POST['supplier_id'];
	
	
	
		mysqli_query($con,"INSERT INTO productcode(sc_id,pc_code,unitprice,reorderlevel,prod_qty,supplier_id) 
			VALUES('$sc_id','$pc_code','$unitprice','$reorderlevel','0','$supplier_id')")or die(mysqli_error($con));  
			
			echo "<script>window.location='productcodes.php'</script>";   
	


?>