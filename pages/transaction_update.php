<?php session_start();
if(empty($_SESSION['id'])):
header('Location:../index.php');
endif;

include('../dist/includes/dbcon.php');
	$id = $_POST['id'];
	$date = $_POST['date'];
	$shift_id = $_POST['shift_id'];
    /* $nosalnumber = $_POST['nosalnumber']; */
    $nosal_id = $_POST['nosal_id']; 
    //$prod_id=$_POST['prod_id'];
    $openmeter =$_POST['openmeter'];
    $closemeter =$_POST['closemeter'];
	$nextday =date('Y-m-d', strtotime("+1 day", strtotime($date)));
    
    $rtt =$_POST['rtt'];

	if($closemeter>$openmeter){
        $ls = ($_POST['closemeter'])-($_POST['openmeter']);
        $litressold = ($ls) - ($rtt);

    }
    else{
        $litressold=0;
    }
	$currentprice = $_POST['unitprice'];
	$total = ($currentprice) * ($litressold);

	$query2=mysqli_query($con,"select closemeter from dailysales  where dailysales_id='$id' ")or die(mysqli_error());
                                      $row2=mysqli_fetch_array($query2);
                                      $oldclosemeter = $row2['closemeter'];
	$difference = $oldclosemeter - $closemeter;
	mysqli_query($con,"update dailysales set unitprice='$currentprice',total='$total',closemeter='$closemeter',litressold='$litressold' where dailysales_id='$id'")or die(mysqli_error());

	if($difference > 0){
		mysqli_query($con,"update dailysales set unitprice='$currentprice',total='$total',closemeter='$closemeter',litressold='$litressold' where dailysales_id='$id'")or die(mysqli_error());
		mysqli_query($con,"update dailysales set openmeter=openmeter+'$difference',litressold=litressold-'$difference' where  nosal_id='$nosal_id' and date='$nextday' order by date asc limit 1")or die(mysqli_error());
		echo "<script>document.location='cash_transaction.php?shift_id=$shift_id&nosal_id=$nosal_id&date=$date'</script>";  

	}
	else{
		mysqli_query($con,"update dailysales set unitprice='$currentprice',total='$total',closemeter='$closemeter',litressold='$litressold' where dailysales_id='$id'")or die(mysqli_error());
		echo "<script>document.location='cash_transaction.php?shift_id=$shift_id&nosal_id=$nosal_id&date=$date'</script>";  
	}

	
	
	
	

	
?>
