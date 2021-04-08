<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['stpd_id'];
	 $stationprod_name = $_POST['product_name'];
	 
	
	 
	 mysqli_query($con,"UPDATE stproducts SET product_name='$stationprod_name'  where stpd_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated Station Product details!');</script>";
		echo "<script>document.location='products.php'</script>";
	
} 

