<?php
include("connection.php");
session_start();
$email=$_POST['email'];
$pass=$_POST['password'];

if($email=='admin@gmail.com' && $pass='admin')
{
	//--------create session---------
	$_SESSION["adminlogin"]="yes";
	?><script>
	var res=confirm('WELCOME ADMIN');
	if(res==true){
		window.location="index.php";
	}else{
		window.location="index.php";
	}
	</script><?php
	
}
else
{
		$sql= "SELECT * from user WHERE u_email='$email' AND u_password='$pass'";
		//echo $sql;

		$query=mysqli_query($conn,$sql);
		$rowcount=mysqli_num_rows($query);
		if($rowcount==1){
			$result=mysqli_fetch_row($query);
			//print_r($result); die;
			
			//--------create session---------
			$_SESSION["loginid"]=$result[0];
			$sql="select * from user where u_id=".$_SESSION['loginid'];
			$query=mysqli_query($conn,$sql);
			$result=mysqli_fetch_row($query);
			
			//echo $_SESSION["login"][1]; die;
			//echo $_SESSION["loginname"]; die;
			?><script>
			var res=confirm('Welcome '+'<?=$result[1]?>'+' :)');
			if(res==true){
				window.location="index.php";
			}else{
				window.location="index.php";
			}
			</script><?php
		}
		else{
			?><script>
			var res=confirm('Invalid Credentials');
			if(res==true){
				window.location="index.php";
			}else{
				window.location="index.php";
			}
			</script><?php
		}
}

?>