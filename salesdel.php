<?php
include('dbcon.php');

 if (isset($_POST['submit']))
 { 
	 $id = $_POST['id'];
     
	 
	
	 
	 mysqli_query($con,"DELETE FROM dailysales where dailysales_id='$id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully Deleted Daily Sales !');</script>";
		echo "<script>document.location='sale.php'</script>";
	
} 

