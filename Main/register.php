<?php
include("connection.php");
 
$name=$_POST['name'];
$phone=$_POST['phone'];
$email=$_POST['email'];
$pass=$_POST['password'];
$bandname=$_POST['bandname'];

$emailcheck=mysqli_query($conn,"SELECT * FROM user WHERE u_email='$email'");
if(mysqli_num_rows($emailcheck)==0)
{
	$sql = "INSERT INTO user (u_name,u_email,u_password,u_type,u_phone,u_band)
	VALUES ('$name','$email','$pass','user','$phone','$bandname')";
	//echo $sql;
	$query=mysqli_query($conn,$sql);
	if($query){
		//echo"Registered IN";
		header("location:index.php");
		echo "<script>alert('Registered')</script>";
	
	}
	else{
		echo "not inserted";
	}
}
else
{
	echo "<script>confirm('Already Existing')</script>";
	header("location:index.php");
}




?>