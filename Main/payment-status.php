<?php
include("connection.php");
if($_GET['complete1'])
{
	$query="update payment set payment_status='completed' where p_id=".$_GET['complete1'];
	echo $query;
	mysqli_query($conn,$query);
}
else if($_GET['reject1'])
{
	$query="update payment set payment_status='reject' where p_id=".$_GET['reject1'];
	mysqli_query($conn,$query);
	
}
header("location:payment-list.php");

?>