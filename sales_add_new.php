<?php 
include 'dbcon.php';
$date = date("Y-m-d H:i:s");
	$shift_id = $_POST['shift_id'];
    /* $nosalnumber = $_POST['nosalnumber']; */
    $nosal_id = $_POST['nosal_id']; 
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


    $query=mysqli_query($con,"select * from currentprice  where prod_id='$prod_id'")or die(mysqli_error($con));
    while ($row=mysqli_fetch_array($query))
		{
            $currentprice =$row['currentprice'];
            $total = ($currentprice) * ($litressold);
    /*$pricechange=$_POST['pricechange'];*/


    

        mysqli_query($con,"INSERT INTO dailysales(date,shift_id,nosal_id,prod_id,openmeter,closemeter,unitprice,litressold,total) 
			VALUES('$date','$shift_id','$nosal_id','$prod_id','$openmeter','$closemeter','$currentprice','$litressold','$total')")or die(mysqli_error($con));  
			
			echo "<script>window.location='sale.php?shift_id=$shift_id&nosal_id=$nosal_id&prod_id=$prod_id'</script>";   


        }   

   

    
    

	
	
	
		
	


?>
