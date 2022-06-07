<?php
include('connection.php');
session_start();
//$userid=$_SESSION['loginid'];
$userid=1;
$sql="SELECT b.b_id,booking_date, b.u_id  FROM booking b, payment p where b.b_id = p.b_id and p.payment_status = 'reject' and b.u_id =".$userid;


$sql2="select * from slot where booking_date='2020-02-18' and u_id=1";
$query=mysqli_query($conn,$sql);
while($row=mysqli_fetch_array($query))
{
    $bid=$row['b_id'];
	$bdate=$row['booking_date'];
	$uid=$row['u_id'];
	
	$sql2="select * from slot where booking_date='$bdate' and u_id='$uid'";
	$query2=mysqli_query($conn,$sql2);
	
	echo "<br>------------------------";
	echo "<br><br>Bid=$bid";
	echo "<br>BookingDate=$bdate";
	echo "<br>UserID=$uid";
	
	while($row2=mysqli_fetch_array($query2))
	{
		$sid=$row2['s_id'];
		$uid2=$row2['u_id'];
		$datee=$row2['booking_date'];
		echo "<br><br>Sid2=$sid";
		echo "<br>BookingDate2=$datee";
		echo "<br>UserID2=$uid2";
	}
	//$query2=mysqli_query($conn,$sql2);		

}

/*$sql3="delete from slot where u_id=$userid and booking_date='$bdate'";
$query3=mysqli_query($conn,$sql3);*/


?>