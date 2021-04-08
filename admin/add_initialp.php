<?php 
include 'dbcon.php';
	$pc_id = $_POST['pc_id'];
	//$pc_code = $_POST['pc_code'];
    $prod_qty = $_POST['prod_qty'];
	//$prod_id = $_POST['prod_id'];
	
	
	
		mysqli_query($con,"INSERT INTO lastpdinitial(pc_id,prod_qty) 
			VALUES('$pc_id','$prod_qty')")or die(mysqli_error($con));  
			
            echo "<script type='text/javascript'>alert('A new product Quantity has been set');</script>";   
            echo "<script>window.location='productcode.php'</script>";
            
	


?>