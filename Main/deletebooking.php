<?php
include("connection.php");

//	$sql="delete from slot where s_id=".$_GET['delid'];
	$sql="delete from slot,payment,booking where booking.b_id=payment.b_id and slot.u_id=booking.u_id and payment_status='pending' or payment_status='reject' and s_id=".$_GET['delid'];
	echo $sql; die;
	$query=mysqli_query($conn,$sql);
?>