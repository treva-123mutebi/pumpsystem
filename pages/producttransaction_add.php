<?php 
session_start();
$id=$_SESSION['id'];
$branch=$_SESSION['branch'];	

include('../dist/includes/dbcon.php');

	$cid = $_POST['cid'];
    $date = $_POST['date'];
	$name = $_POST['pc_name'];
	$qty = $_POST['qty'];
	$remark = $_POST['remark'];
	$cust_name = $_POST['cust_name'];
		
			
		$query=mysqli_query($con,"select prod_price,pc_id from productcode where pc_id='$name'")or die(mysqli_error());
		$row=mysqli_fetch_array($query);
		$price=$row['prod_price'];
		
		$query1=mysqli_query($con,"select * from temp_trans where pc_id='$name' and branch_id='$branch'")or die(mysqli_error());
		$count=mysqli_num_rows($query1);
		
		$total=$price*$qty;
		
		if ($count>0){
			mysqli_query($con,"update temp_trans set qty=qty+'$qty',price='$price' where pc_id='$name' and branch_id='$branch'")or die(mysqli_error());
	
		}
		else{
			mysqli_query($con,"INSERT INTO temp_trans(pc_id,qty,price,remark,branch_id) VALUES('$name','$qty','$price','$remark','$branch')")or die(mysqli_error($con));
		}

	
		echo "<script>document.location='productsaletransaction.php?cid=$cid&date=$date&remark=$remark&cust_name=$cust_name'</script>";  
	
?>