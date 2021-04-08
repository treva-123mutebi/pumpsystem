<?php

include 'dbcon.php';

$id = $_REQUEST['id']; 
$query2=mysqli_query($con,"SELECT * FROM tankreadings WHERE tankreading_id = '$id'")or die(mysqli_error($con));

$row = mysqli_fetch_array($query2);;

?>

<form method="post" action="tankdel.php" />

<table>

<tr>
<td><input type="hidden" name="id" value="<? echo "$row[tankreadings_id]" ?>"></td>
<input type="hidden" name="id" value="<? echo "$row[stunit_id]" ?>">
</tr>
<tr>
<td><h2>Delete record</h2></td>

</tr>

<tr>
<td>Are you sure you want to delete daily Tank record</td>

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