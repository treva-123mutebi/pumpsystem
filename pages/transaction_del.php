<?php
include("../dist/includes/dbcon.php");
$id = $_REQUEST['id'];
$cid = $_POST['cid'];
$date =$_POST['date'];
$remark =$_POST['remark'];
$cust_name =$_POST['cust_name'];
$result=mysqli_query($con,"DELETE FROM temp_trans WHERE temp_trans_id ='$id'")
	or die(mysqli_error());
	
	echo "<script>document.location='productsaletransaction.php?cid=$cid&date=$date&remark=$remark&cust_name=$cust_name'</script>";    
?>