<?php
	include("connection.php");
	$sql="delete from enquiry where e_id=".$_GET['delid'];
	$query=mysqli_query($conn,$sql);
	header("location:view-enquiries.php");
?>