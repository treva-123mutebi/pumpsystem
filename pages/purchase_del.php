<?php
include("../dist/includes/dbcon.php");
$id = $_REQUEST['id'];

$result=mysqli_query($con,"DELETE FROM purchase WHERE purchase_id ='$id'")
	or die(mysqli_error());
	
	echo "<script>document.location='fuelpurchases.php'</script>";    
?>