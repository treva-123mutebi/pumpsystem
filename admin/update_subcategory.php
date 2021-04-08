<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['sc_id'];
	 //$stationprod_name = $_POST['product_name'];
	 $sc_name=$_POST['sc_name'];
	
	 
	 mysqli_query($con,"UPDATE pdsubcat SET sc_name='$sc_name'  where sc_id='$id'")
	 or die(mysqli_error($con)); 

		//echo "<script type='text/javascript'>alert('Successfully updated Station Product details!');</script>";
		echo "<script>document.location='subcategories.php'</script>";
	
} 

