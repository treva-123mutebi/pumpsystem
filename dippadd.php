<?php 
include 'dbcon.php';
$date = date("Y-m-d H:i:s");
$dippmorn = $_POST['dippmorn'];
$openinvoice = $_POST['openinvoice'];
$dippeven =$_POST['dippeven'];
$closeinvoice = $_POST['closeinvoice'];
$pumpid = $_POST['pumpid'];
	/* $shift_id = $_POST['shift_id'];
    $nosalnumber = $_POST['nosalnumber'];
    $pumpid = $_POST['pumpid'];
    $prod_id=$_POST['prod_id'];
    $openmeter =$_POST['openmeter'];
    $closemeter =$_POST['closemeter']; */
    
    /* $rtt =$_POST['rtt'];*/
    /* if($closemeter>$openmeter){
        $litressold = ($_POST['closemeter'])-($_POST['openmeter']);

    }
    else{
        $litressold=0;
    }
    */

   /* $unitprice =$_POST['currentprice'];
   $total = ($unitprice) * ($litressold); */
    /*$pricechange=$_POST['pricechange'];*/


    

        mysqli_query($con,"INSERT INTO dailydipp(date,openinv,dippmorn,closeinv,dippenv,pumpid) 
			VALUES('$date','$openinvoice','$dippmorn','$closeinvoice','$dippeven','$pumpid')")or die(mysqli_error($con));  
			
			echo "<script>window.location='dipp.php'</script>";   

    
    

	
	
	
		
	


?>
