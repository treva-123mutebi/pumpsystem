<?php 
include 'dbcon.php';
$date = date("Y-m-d H:i:s");
    $supplier_id = $_POST['supplier_id'];
    $pumpid = $_POST['pumpid'];
    $litresin =$_POST['litresin'];
    $unitprice =$_POST['unitprice'];
    $total = ($unitprice) * ($litresin);
    /* $nosalnumber = $_POST['nosalnumber'];
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
    
   $unitprice =$_POST['currentprice'];
   $total = ($unitprice) * ($litressold); */
    /*$pricechange=$_POST['pricechange'];*/


    

        mysqli_query($con,"INSERT INTO purchase(date,supplier_id,pumpid,litresin,unitprice,payment) 
			VALUES('$date','$supplier_id','$pumpid','$litresin','$unitprice','$total')")or die(mysqli_error($con));  
			
			echo "<script>window.location='purchase.php'</script>";   

    
    

	
	
	
		
	


?>
