<?php
include('dbcon.php');

 if (isset($_POST['submit']))
 { 
	 $id = $_POST['id'];
     $nosal_id = $_POST['nosal_id'];
	 
	
	 
	 mysqli_query($con,"DELETE FROM dailysales where nosal_id='$nosal_id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully Deleted Daily Sales !');</script>";
		echo "<script>document.location='sale.php'</script>";
	
} 

