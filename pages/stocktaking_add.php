<?php 
session_start();
include('../dist/includes/dbcon.php');
	$branch=$_SESSION['branch'];
	$name = $_POST['pc_code'];
	$qty = $_POST['qtycounted'];
	//$unitprice = $_POST['unitprice'];
	$date = $_POST['date'];
	//$total = $qty*$unitprice;
	date_default_timezone_set('Asia/Manila');

	$date1 = date("Y-m-d H:i:s");
	$id=$_SESSION['id'];
	
	$query=mysqli_query($con,"select pc_code,prod_qty from productcode where pc_id='$name'")or die(mysqli_error());
  
        $row=mysqli_fetch_array($query);
		$product=$row['pc_code'];
		$prod_qty=$row['prod_qty'];
		$difference = ($qty)-($prod_qty);
	    $remarks="Stock taking updated $qty of $product";  
	
		mysqli_query($con,"INSERT INTO history_log(user_id,action,date) VALUES('$id','$remarks','$date1')")or die(mysqli_error($con));
		
		
	mysqli_query($con,"UPDATE productcode SET prod_qty='$qty' where pc_id='$name'") or die(mysqli_error($con)); 
			
			mysqli_query($con,"INSERT INTO stocktaking(pc_id,date,qty_counted,qty_available,difference,user_id) VALUES('$name','$date','$qty','$prod_qty','$difference','$id')")or die(mysqli_error($con));

			echo "<script type='text/javascript'>alert('Successful stock taking!');</script>";
					  echo "<script>document.location='stocktaking.php'</script>";  
	
?>