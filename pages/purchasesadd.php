<?php 
include('../dist/includes/dbcon.php');
$date = $_POST['date'];
    $supplier_id = $_POST['supplier_id'];
    $stunit_id = $_POST['stunit_id'];
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


    

        mysqli_query($con,"INSERT INTO purchase(date,supplier_id,stunit_id,litresin,unitprice,payment) 
			VALUES('$date','$supplier_id','$stunit_id','$litresin','$unitprice','$total')")or die(mysqli_error($con));  
			
			echo "<script>window.location='fuelpurchases.php'</script>";   

    
    

	
	
	
		
	


?>
