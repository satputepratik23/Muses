<?php
//session_start();
 include("header.php");
 include("connection.php");
 $sql="select * from user where u_id=".$_SESSION['loginid'];
$query=mysqli_query($conn,$sql);
$result=mysqli_fetch_row($query);
 if(isset($_POST['update'])){
	 $username=$_POST["username"];
	 $email=$_POST["email"];
	 $phone=$_POST["phone"];
	 $userband=$_POST["userband"];
	 $loginid=$_SESSION['loginid'];
	 $sql="update user set u_name='$username',u_email='$email'
	 ,u_phone='$phone',u_band='$userband' where u_id=$loginid";
	 $query=mysqli_query($conn,$sql);
	 if($query)
	 {
		 ?><script>
		var res=confirm('Updated Successfully!!');
		if(res==true){
			window.location="editdetails.php";
		}else{
			window.location="editdetails.php";
		}
		</script><?php
	 }
	 else{ 
		?><script>
		var res=confirm('Failed to Update Details!!');
		if(res==true){
			window.location="editdetails.php";
		}else{
			window.location="editdetails.php";
		}
		</script><?php
		 
	 }
		 
 }
 ?>

<form method="post" action="editdetails.php">
<div class="container" style="padding-top:5rem;padding-bottom:5rem;font-size:23px;">
  <div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-4" style="padding-bottom:2rem;"> <h2 style="letter-spacing:0.1rem;"><strong> Edit Details </strong></h2></div>
	<div class="col-md-5"></div>
  </div>
  
  
  <div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-2" style="padding-bottom:2rem;"> <strong> Name </strong></div>
    <div class="col-md-3">
      <input type="text" name="username" class="form-control" placeholder="Enter name" value="<?=$result[1]?>">
    </div>
	<div class="col-md-4"></div>
  </div>
  
  <div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-2" style="padding-bottom:2rem;"> <strong> Phone </strong></div>
    <div class="col-md-3">
      <input type="text" class="form-control" name="phone" placeholder="Enter phone"value="<?=$result[5]?>">
    </div>
	<div class="col-md-4"></div>
  </div>
  
  <div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-2" style="padding-bottom:2rem;"> <strong> Email </strong></div>
    <div class="col-md-3">
      <input type="text" class="form-control" name="email" placeholder="Enter email"value="<?=$result[2]?>" readonly>
    </div>
	<div class="col-md-4"></div>
  </div>
  
  <div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-2" style="padding-bottom:3rem;"> <strong> Band Name </strong></div>
    <div class="col-md-3">
      <input type="text" class="form-control"name="userband" placeholder="Enter Band Name"value="<?=$result[6]?>">
    </div>
	<div class="col-md-4"></div>
  </div>
  <div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-2" style="padding-bottom:2rem;"></div>
    <div class="col-md-2">
		<button type="submit" name="update" class="btn btn-outline-dark btn-lg">Update</button>
    </div>
	<div class="col-md-5"></div>
  </div>
  
</div>
</form>
 <?php
 include("footer.php");
 ?> 