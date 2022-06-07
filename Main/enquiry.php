<?php
include("header.php");
include("connection.php");
if(isset($_POST['enquiry']))
{
	$name=$_POST['username'];
	$phone=$_POST['phone'];
	$email=$_POST['email'];
	$enquiry=$_POST['enquirydetails'];
	$sqlenquiry="insert into enquiry (name,email,phone,enquiry_text) values ('$name','$email','$phone','$enquiry')";
	$resultenquiry=mysqli_query($conn,$sqlenquiry);
	if($resultenquiry)
	{
		?>"<script> alert("Enquiry Details Sent Successfully!!");window.location="index.php";</script>"<?php
	}
	else
	{
		?>"<script> alert("Sorry Please try again Later!!");window.location="index.php";</script>"<?php
	}
}

?>

<div class="container" style="padding-top:5rem;padding-bottom:5rem;">
<form method="post" action="#">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-2" style="padding-bottom:1rem;"> <h2 style="letter-spacing:0.1rem;"><strong> Enquiry </strong></h2></div>
    </div>
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-1" style="padding-bottom:2rem;"> <strong> Name </strong></div>
		<div class="col-md-5">
		  <input type="text" name="username" class="form-control" placeholder="Enter name" required>
		</div>
		<div class="col-md-2"></div>
	</div>
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-1" style="padding-bottom:2rem;"> <strong> Email </strong></div>
		<div class="col-md-5">
		  <input type="text" name="email" class="form-control" placeholder="Enter email" required>
		</div>
		<div class="col-md-2"></div>
	</div>
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-1" style="padding-bottom:2rem;"> <strong> Phone </strong></div>
		<div class="col-md-5">
		  <input type="text" name="phone" class="form-control" placeholder="Enter phone" required>
		</div>
		<div class="col-md-2"></div>
	</div>
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-1"><strong>Enquiry Details</strong></div>
		<div class="col-md-9" style="padding-bottom:2rem;"> 
			<textarea class="form-control" rows="6" placeholder="Enter your question here" name="enquirydetails" required></textarea>
			</div>
	</div>
	
	<div class="row">
		<div class="col-md-3"></div>
		<div class="col-md-9"> 
			<button type="submit" name="enquiry" class="btn btn-outline-dark btn-lg btn-block">Submit</button>
		</div>
	</div>
</div>

<?php
include("footer.php");