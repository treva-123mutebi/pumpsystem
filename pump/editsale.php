<?php

$previous = "javascript:history.go(-1)";
if(isset($_SERVER['HTTP_REFERER'])) {
    $previous = $_SERVER['HTTP_REFERER'];
}

include 'dbcon.php';

$dailysales_id = $_REQUEST['id']; 
$query2=mysqli_query($con,"SELECT * FROM dailysales WHERE dailysales_id = '$dailysales_id'")or die(mysqli_error($con));

$row = mysqli_fetch_array($query2);

?>



<form method="post" action="updatesales.php" />

<table>

<tr>
<td><input type="hidden" name="id" value="<? echo "$row[dailysales_id]" ?>"></td>
</tr>
<tr>
<td><h2>Edit Daily Sales Record</h2></td>

</tr>

<tr>
<td>Date:</td>
<td><input type="text" name="date" value="<? echo date("M d, Y",strtotime($row['date']));?>"></td>
</tr>

<tr>
<td>Open Meter:</td>
<td><input type="text" name="openmeter" value="<? echo "$row[openmeter]" ?>"></td>
</tr>

<tr>
<td>Close Meter:</td>
<td><input type="text" name="closemeter" value="<? echo "$row[closemeter]" ?>"></td>
</tr>

<tr>
<td>RTT:</td>
<td><input type="text" name="rtt" value="<? echo "$row[rtt]" ?>"></td>
</tr>

<tr>
<td>Current Price:</td>
<td><input type="text" name="unitprice" value="<?echo "$row[unitprice]" ?>"></td>
</tr>

<tr>
<td></td>
<td><button type="submit" name = "update" >SUBMIT</button></td>
</tr>
<tr>
<td></td>
<td><a href="javascript:history.go(-1)" type="btn-submit" name = "" >Cancel</button></td>
</tr>

</table>

</form>