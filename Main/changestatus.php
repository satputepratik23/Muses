<?php
include("connection.php");
if($_GET['statshow'])
{
	$query="delete from adminslot where admin_slot_id=".$_GET['statshow'];
	//echo $query;
	mysqli_query($conn,$query);
}
else if($_GET['stathide'])
{
	$query="update adminslot set status='hide' where admin_slot_id=".$_GET['stathide'];
	mysqli_query($conn,$query);
}
header("location:show-disabled-slots.php");
?>