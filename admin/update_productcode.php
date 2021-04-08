<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['pc_id'];
	 //$stationprod_name = $_POST['product_name'];
	 $pc_code=$_POST['pc_code'];
	
	 
	 mysqli_query($con,"UPDATE productcode SET pc_code='$pc_code'  where pc_id='$id'")
	 or die(mysqli_error($con)); 

		//echo "<script type='text/javascript'>alert('Successfully updated Station Product details!');</script>";
		echo "<script>document.location='productcodes.php'</script>";
	
} 

