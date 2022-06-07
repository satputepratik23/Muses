<?php
	include("connection.php");
	$sql="delete from feedback where f_id=".$_GET['delid'];
	$query=mysqli_query($conn,$sql);
	header("location:view-feedback.php");
	//include("footer.php");
?>