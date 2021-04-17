<?php 
session_start();
$id=$_SESSION['id'];
$branch=$_SESSION['branch'];	

include('../dist/includes/dbcon.php');

$date = $_POST['date'];
$dippmorn = $_POST['dippmorn'];
$openinvoice = $_POST['openinvoice'];
$dippeven =$_POST['dippeven'];
$closeinvoice = $_POST['closeinvoice'];

$stunit_id = $_POST['stunit_id'];
$cummdiff = ($dippeven)-($closeinvoice);
$morndiff = ($dippmorn)-($openinvoice);
$reorderlevel= (23600.00)-($dippeven);

$query=mysqli_query($con,"select cummdiff from lastclosinginvoice  where stunit_id='$stunit_id' ORDER BY stunit_id DESC LIMIT 1,1")or die(mysqli_error());
$row=mysqli_fetch_array($query);
//$price=$row['prod_price'];
$lastcummdiff=$row['cummdiff'];

if($lastcummdiff != 0){
    $dailydiff = ($cummdiff) - ($lastcummdiff);
}
else {
    $dailydiff = ($cummdiff) - ($lastcummdiff);;
}

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


    

        mysqli_query($con,"INSERT INTO tankreadings(date,openinvoice,dippmorn,morndiff,closinginvoice,dippeven,cummdiff,dailydiff,reorderlevel,stunit_id) 
            VALUES('$date','$openinvoice','$dippmorn','$morndiff','$closeinvoice','$dippeven','$cummdiff','$dailydiff','$reorderlevel','$stunit_id')")or die(mysqli_error($con));

        mysqli_query($con,"INSERT INTO lastclosinginvoice(stunit_id,closinginvoice,cummdiff,lastdipp) 
        VALUES('$stunit_id','$closeinvoice','$cummdiff','$dippeven')")or die(mysqli_error($con));      
			
			echo "<script>window.location='prod_transaction.php?stunit_id=$stunit_id&date=$date'</script>";   

		
	
?>