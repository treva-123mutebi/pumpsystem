<?php
include('dbcon.php');

 if (isset($_POST['update']))
 { 
	 $id = $_POST['id'];
     $openmeter = $_POST['openmeter'];
     $rtt = $_POST['openmeter'];
     $unitprice = $_POST['openmeter'];
     $closemeter = $_POST['openmeter'];
	 
	
	 
	 mysqli_query($con,"UPDATE dailysales SET openmeter='$openmeter',rtt='$rtt',unitprice ='$unitprice',closemeter ='$closemeter'  where dailysales_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully updated Daily Sales !');</script>";
		echo "<script>document.location='sale.php'</script>";
	
} 

