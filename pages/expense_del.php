<?php
include("../dist/includes/dbcon.php");
$id = $_REQUEST['id'];

$result=mysqli_query($con,"DELETE FROM expenses WHERE expenses_id ='$id'")
	or die(mysqli_error());
	
	echo "<script>document.location='expenses.php'</script>";    
?>