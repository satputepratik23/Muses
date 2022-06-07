<?php
session_start();
@include('header.php');
include("connection.php");
$sql="select * from user where u_id=".$_SESSION['loginid'];
$query=mysqli_query($conn,$sql);
$result=mysqli_fetch_row($query);
?>
<form>
<div class="container" style="padding-top:5rem;padding-bottom:5rem;font-size:23px;">
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-2" style="padding-bottom:2rem;"> <strong> Name: </strong></div>
		<div class="col-md-3"><?=$result[1]?></div>
		<div class="col-md-4"></div>
  </div>
  <div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-2" style="padding-bottom:2rem;"> <strong> Email: </strong></div>
		<div class="col-md-3"><?=$result[2]?></div>
		<div class="col-md-4"></div>
  </div>
  <div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-2" style="padding-bottom:2rem;"> <strong> Phone: </strong></div>
		<div class="col-md-3"> <?=$result[5]?></div>
		<div class="col-md-4"></div>
  </div>
  <div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-2" style="padding-bottom:3rem;"> <strong> Band Name: </strong></div>
		<div class="col-md-3"> <?=$result[6]?></div>
		<div class="col-md-4"></div>
  </div>
  <div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-3" style="padding-bottom:2rem;"> <a href="editdetails.php"><button type="button" class="btn btn-outline-dark btn-lg">Edit Details</button></a> </div>
		<div class="col-md-3"> <button type="button" class="btn btn-outline-dark btn-lg">Booking History	</button></div>
		<div class="col-md-3"> </div>
  </div>
</div>
</form>

<?php
	include("footer.php");
?>