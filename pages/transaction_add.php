<?php 
session_start();
$id=$_SESSION['id'];
$branch=$_SESSION['branch'];	

include('../dist/includes/dbcon.php');

$date = $_POST['date'];
	$shift_id = $_POST['shift_id'];
    /* $nosalnumber = $_POST['nosalnumber']; */
    $nosal_id = $_POST['nosal_id']; 
    //$prod_id=$_POST['prod_id'];
    $openmeter =$_POST['openmeter'];
    $closemeter =$_POST['closemeter'];
    
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
    /*$pricechange=$_POST['pricechange'];*/

    $query2=mysqli_query($con,"select prod_id from nosals  where nosal_id='$nosal_id' ")or die(mysqli_error());
                                      $row2=mysqli_fetch_array($query2);
                                      $prod_id = $row2['prod_id'];


    

        mysqli_query($con,"INSERT INTO dailysales(date,shift_id,nosal_id,openmeter,closemeter,unitprice,rtt,litressold,total,prod_id) 
            VALUES('$date','$shift_id','$nosal_id','$openmeter','$closemeter','$currentprice','$rtt','$litressold','$total','$prod_id')")or die(mysqli_error($con));
            
            mysqli_query($con,"INSERT INTO lastclosingmeter(nosal_id,closemeter) 
            VALUES('$nosal_id','$closemeter')")or die(mysqli_error($con));         
			
			echo "<script>window.location='cash_transaction.php?shift_id=$shift_id&nosal_id=$nosal_id&date=$date'</script>";  
	
?>