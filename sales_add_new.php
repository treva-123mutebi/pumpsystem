<?php 
include 'dbcon.php';
$date = date("Y-m-d H:i:s");
	$shift_id = $_POST['shift_id'];
    $nosalnumber = $_POST['nosalnumber'];
    $pumpid = $_POST['pumpid'];
    $prod_id=$_POST['prod_id'];
    $openmeter =$_POST['openmeter'];
    $closemeter =$_POST['closemeter'];
    $rtt =$_POST['rtt'];
    $litressold =$_POST['litressold'];
    $unitprice =$_POST['unitprice'];
    $total = ($unitprice) * ($litressold);
    $pricechange=$_POST['pricechange'];


    if($pricechange == "yes"){
        $pcopenmeter =$_POST['pcopenmeter'];
        $pcclosemeter=$_POST['pcclosemeter'];
        $pcrtt=$_POST['pcrtt'];
        $pclitressold=$_POST['pclitressold'];
        $pcunitprice=$_POST['pcunitprice'];
        $pctotal = ($pcunitprice) * ($pclitressold);

        mysqli_query($con,"INSERT INTO dailysales(date,shift_id,pumpid,nosalnumber,prod_id,openmeter,closemeter,rtt,litressold,unitprice,total,pricechange,pcopenmeter,pcclosemeter,pcrtt,pclitressold,pcunitprice,pctotalpayment) 
			VALUES('$date','$shift_id','$pumpid','$nosalnumber','$prod_id','$openmeter','$closemeter','$rtt','$litressold','$unitprice','$total','$pricechange','$pcopenmeter','$pcclosemeter','$pcrtt','$pclitressold','$pcunitprice','$pctotal')")or die(mysqli_error($con));  
			
			echo "<script>window.location='sale.php'</script>";   

    }
    else
    {
        $pcopenmeter =$_POST['openmeter'];
        $pcclosemeter=$_POST['closemeter'];
        $pcrtt=$_POST['pcrtt'];
        $pclitressold=$_POST['litressold'];
        $pcunitprice=$_POST['unitprice'];
        $pctotal = ($pcunitprice) * ($pclitressold);


        mysqli_query($con,"INSERT INTO dailysales(date,shift_id,pumpid,nosalnumber,prod_id,openmeter,closemeter,rtt,litressold,unitprice,total,pricechange,pcopenmeter,pcclosemeter,pcrtt,pclitressold,pcunitprice,pctotalpayment)  
        VALUES('$date','$shift_id','$pumpid','$nosalnumber','$prod_id','$openmeter','$closemeter','$rtt','$litressold','$unitprice','$total','$pricechange','$pcopenmeter','$pcclosemeter','$pcrtt','$pclitressold','$pcunitprice','$pctotal')")or die(mysqli_error($con));  
        
        echo "<script>window.location='sale.php'</script>";   
    }

	
	
	
		
	


?>
