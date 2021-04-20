<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['pc_id'];
	 //$stationprod_name = $_POST['product_name'];
	 $pc_code=$_POST['pc_code'];
	 $prod_qty=$_POST['prod_qty'];
	 $unitprice=$_POST['unitprice'];
	 $reorderlevel=$_POST['reorderlevel'];
	 $supplier_id=$_POST['supplier_id'];

	
	 
	 mysqli_query($con,"UPDATE productcode SET pc_code='$pc_code',prod_qty='$prod_qty',unitprice='$unitprice',reorderlevel='$reorderlevel',supplier_id='$supplier_id'  where pc_id='$id'")
	 or die(mysqli_error($con)); 

		//echo "<script type='text/javascript'>alert('Successfully updated Station Product details!');</script>";
		echo "<script>document.location='productcodes.php'</script>";
	
} 

