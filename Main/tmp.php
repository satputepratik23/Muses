<?php
include("connection.php");
if($_GET['complete1'])
{
	$query="update payment set payment_status='completed' where p_id=".$_GET['complete'];
	echo $query;
	mysqli_query($conn,$query);
	header("location:payment-list.php");
}
else if($_GET['reject1'])
{
	$query="update payment set payment_status='reject' where p_id=".$_GET['reject'];
	mysqli_query($conn,$query);
	header("location:payment-list.php");
	
}else if($_GET['complete2'])
{
	$query="update payment set payment_status='completed' where p_id=".$_GET['complete'];
	echo $query;
	mysqli_query($conn,$query);
	header("location:payment-list-by-date-2.php");
}
else if($_GET['reject2'])
{
	$query="update payment set payment_status='reject' where p_id=".$_GET['reject'];
	mysqli_query($conn,$query);
	header("location:payment-list-by-date-2.php");
}


?>