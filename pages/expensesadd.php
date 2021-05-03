<?php 
include('../dist/includes/dbcon.php');
$date = $_POST['date'];
$expense_name = $_POST['expense_name'];
$amount = $_POST['amount'];    
    


    

        mysqli_query($con,"INSERT INTO expenses(date,expense_name,amount) 
			VALUES('$date','$expense_name','$amount')")or die(mysqli_error($con));  
			
			echo "<script>window.location='expenses.php'</script>";   

    
    

	
	
	
		
	


?>
