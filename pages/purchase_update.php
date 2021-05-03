<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	$supplier_id = $_POST['supplier_id'];
    $stunit_id= $_POST['stunit_id'];
    $litresin = $_POST['litresin'];
    $unitprice = $_POST['unitprice'];
    $payment = ($litresin)*($unitprice);
    mysqli_query($con,"update purchase set unitprice='$unitprice',supplier_id='$supplier_id',stunit_id='$stunit_id',litresin='$litresin',payment='$payment' where purchase_id='$id'")or die(mysqli_error());
	echo "<script>document.location='fuelpurchases.php'</script>";  

	
	
	
	

	
?>
