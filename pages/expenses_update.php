<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	
   
    $expense_name = $_POST['expense_name'];
    $amount = $_POST['amount'];
    //$payment = ($litresin)*($unitprice);
    mysqli_query($con,"update expenses set amount='$amount',expense_name='$expense_name' where expenses_id='$id'")or die(mysqli_error());
	echo "<script>document.location='expenses.php'</script>";  

	
	
	
	

	
?>
