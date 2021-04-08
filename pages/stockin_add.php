<?php 
session_start();
include('../dist/includes/dbcon.php');
	$branch=$_SESSION['branch'];
	$name = $_POST['pc_code'];
	$qty = $_POST['qty'];
	//$unitprice = $_POST['unitprice'];
	$date = $_POST['date'];
	//$total = $qty*$unitprice;
	date_default_timezone_set('Asia/Manila');

	$date1 = date("Y-m-d H:i:s");
	$id=$_SESSION['id'];
	
	$query=mysqli_query($con,"select pc_code from productcode where pc_id='$name'")or die(mysqli_error());
  
        $row=mysqli_fetch_array($query);
		$product=$row['pc_code'];
		$unitprice=$row['unitprice'];
		$total = $qty*$unitprice;
	$remarks="added $qty of $product";  
	
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date1')")or die(mysqli_error($con));
		
		
	mysqli_query($con,"UPDATE productcode SET prod_qty=prod_qty+'$qty' where pc_id='$name'") or die(mysqli_error($con)); 
			
			mysqli_query($con,"INSERT INTO stockin(pc_id,qty,total,date,branch_id,user_id) VALUES('$name','$qty','$total','$date','$branch','$id')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successfully added new stocks!');</script>";
					  echo "<script>document.location='stockin.php'</script>";  
	
?>