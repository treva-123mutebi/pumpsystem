<?php 
include 'dbcon.php';
$date = date("Y-m-d H:i:s");
	/*  $shift_id = $_POST['shift_id'];
    $nosalnumber = $_POST['nosalnumber'];
    $pumpid = $_POST['pumpid']; */
    $prod_id=$_POST['prod_id'];
    /*$openmeter =$_POST['openmeter'];
    $closemeter =$_POST['closemeter'];
    $rtt =$_POST['rtt'];
    $litressold =$_POST['litressold'];*/
    $currentprice = $_POST['currentprice'];
    /* $total = ($unitprice) * ($litressold);
    $pricechange=$_POST['pricechange'];


    
   
        $pcopenmeter =$_POST['openmeter'];
        $pcclosemeter=$_POST['closemeter'];
        $pcrtt=$_POST['pcrtt'];
        $pclitressold=$_POST['litressold'];
        $pcunitprice=$_POST['unitprice'];
        $pctotal = ($pcunitprice) * ($pclitressold); */
        $query1=mysqli_query($con,"select * from currentprice where prod_id='$prod_id'")or die(mysqli_error());
		$count=mysqli_num_rows($query1);


        if ($count>0){
            mysqli_query($con,"update currentprice set currentprice='$currentprice' where prod_id='$prod_id'")or die(mysqli_error());
            mysqli_query($con,"INSERT INTO tempcurrentprice(date,prod_id,currentprice)  
        VALUES('$date','$prod_id','$currentprice')")or die(mysqli_error($con)); 
	
		}
		else{
            mysqli_query($con,"INSERT INTO currentprice(date,prod_id,currentprice)  
        VALUES('$date','$prod_id','$currentprice')")or die(mysqli_error($con));  
        mysqli_query($con,"INSERT INTO tempcurrentprice(date,prod_id,currentprice)  
        VALUES('$date','$prod_id','$currentprice')")or die(mysqli_error($con)); 

        }
    


        
        
        echo "<script>window.location='currentprice.php'</script>";   
    

	
	
	
		
	


?>
