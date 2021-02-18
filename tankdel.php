<?php
include('dbcon.php');

 if (isset($_POST['submit']))
 { 
	 $id = $_POST['id'];
     $stunit_id = $_POST['stunit_id'];
	 
	
	 
	 mysqli_query($con,"DELETE FROM tankreadings where stunit_id='$tstunit_id'")
	 or die(mysqli_error($con)); 

		echo "<script type='text/javascript'>alert('Successfully Deleted  !');</script>";
		echo "<script>document.location='dipp.php'</script>";
	
} 

