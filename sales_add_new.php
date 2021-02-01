<?php 
include 'dbcon.php';
$date = date("Y-m-d H:i:s");
	$shift_id = $_POST['shift_id'];
    $nosalnumber = $_POST['nosalnumber'];
    $pumpid = $_POST['pumpid'];
    $prod_id=$_POST['prod_id'];
    $openmeter =$_POST['openmeter'];
    $closemeter =$_POST['closemeter'];
    
    /* $rtt =$_POST['rtt'];*/
    if($closemeter>$openmeter){
        $litressold = ($_POST['closemeter'])-($_POST['openmeter']);

    }
    else{
        $litressold=0;
    }
    
   $unitprice =$_POST['currentprice'];
   $total = ($unitprice) * ($litressold);
    /*$pricechange=$_POST['pricechange'];*/


    

        mysqli_query($con,"INSERT INTO dailysales(date,shift_id,pumpid,nosalnumber,prod_id,openmeter,closemeter,unitprice,litressold,total) 
			VALUES('$date','$shift_id','$pumpid','$nosalnumber','$prod_id','$openmeter','$closemeter','$unitprice','$litressold','$total')")or die(mysqli_error($con));  
			
			echo "<script>window.location='sale.php'</script>";   

    
    

	
	
	
		
	


?>
