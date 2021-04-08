<?php

include 'dbcon.php';

$dailysales_id = $_REQUEST['id']; 
$query2=mysqli_query($con,"SELECT * FROM dailysales WHERE dailysales_id = '$dailysales_id'")or die(mysqli_error($con));

$row = mysqli_fetch_array($query2);;

?>

<form method="post" action="salesdel.php" />

<table>

<tr>
<td><input type="hidden" name="id" value="<? echo "$row[dailysales_id]" ?>"></td>
<input type="hidden" type="text" name="rtt" value="<? echo "$row[nosal_id]"  ?>">
</tr>
<tr>
<td><h2>Delete record</h2></td>

</tr>

<tr>
<td>Are you sure you want to delete daily sales record</td>

</tr>



<tr>
<td></td>
<td><button type="submit" name = "submit" >SUBMIT</button></td>
</tr>
<tr>
<td></td>
<td><button type="submit" name = "" >Cancel</button></td>
</tr>

</table>

</form>