<?php
	include("connection.php");
	$sql="delete from user where u_id=".$_GET['delid'];
	$query=mysqli_query($conn,$sql);
	header("location:view-customer.php");
?>