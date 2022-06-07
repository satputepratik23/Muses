<?php
 include("connection.php");
 @include("register-modal.php");
 @include("login-modal.php");
 session_start();
 if(isset($_SESSION['loginid']))
 {
	$sql="select * from user where u_id=".$_SESSION['loginid'];
	$query=mysqli_query($conn,$sql);
	$result=mysqli_fetch_row($query);
 }
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Header Page</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans|Signika&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="pro_style.css">
  <link href="//db.onlinewebfonts.com/c/d9d2c948377147408e714f7e6aca85f5?family=Heorot" rel="stylesheet" type="text/css"/>
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  
</head>
<body style="font-family: 'Signika', sans-serif;">



<!---Jumbotron-->
<div class="jumbotron jumbotron-fluid" style=" background-color:#000000;margin-bottom:0;" >
		<div class="container">
			<h1 class="text-center text-white" style="letter-spacing:.5rem;font-family:heorot;font-size:75px; "> Muses Studio</h1>
		</div>
</div>
<!--End Jumbotron-->



<!--Navigation-->
<nav class="navbar navbar-expand-md sticky-top justify-text-center">
	<a class="navbar-brand" href="#"><img style="height: 5rem" src="../Images/museslogo.png"></a>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
	</button>
	<!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toogler-icon"></span>
	</button>-->
	
	
	
<!-- Navbar for admin-->
	<?php if(isset($_SESSION['adminlogin'])){?>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link navstyle" href="index.php" style="color:#fff;">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link navstyle" href="view-customer.php" style="color:#fff;">View Customers</a>
			</li>
			<li class="nav-item">
				<a class="nav-link navstyle" href="datebooking.php">Disable Slots</a>
			</li>
			<li class="nav-item dropdown">
			<a class="nav-link navstyle dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			Payment Details
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
				<a class="dropdown-item" href="payment-list.php"><span>Show all details</span></a>
				<a class="dropdown-item" href="payment-list-by-date-1.php"><span>Filter by Date</span></a>
			</div>
			<li class="nav-item dropdown">
			<a class="nav-link navstyle dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			MUSES STUDIO ADMIN
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item" href="show-disabled-slots.php"><span>Show Disabled Slots</span></a>
			  <a class="dropdown-item" href="show-selected-slots-1.php"><span>Show slot details</span></a>
			  <a class="dropdown-item" href="view-feedback.php"><span>View Feedback</span></a>
			  <a class="dropdown-item" href="view-enquiries.php"><span>View Enquiries</span></a>
			  <a class="dropdown-item" href="logout.php"><span>Logout</span></a>
			</div>
		  </li>
		</ul>
	</div>
</nav>
	
<!--End Admin Navigation-->
	

<!--Navbar for user-->
	<?php }else {?>
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link navstyle" href="index.php">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link navstyle" href="aboutus.php">About Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link navstyle" href="gallery.php">Gallery</a>
			</li>
			<li class="nav-item">
				<a class="nav-link navstyle" href="enquiry.php">Enquiry</a>
			</li>
			<li class="nav-item">
				<a class="nav-link navstyle" href="services.php">Services</a>
			</li>
			<?php if(isset($_SESSION['loginid'])){ ?>
			<li class="nav-item dropdown">
			<a class="nav-link navstyle dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			  <?=$result[1]?>
			</a>
			<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			  <a class="dropdown-item" href="profile.php"><span>Profile</span></a>
			  <a class="dropdown-item" href="editdetails.php"><span>Edit Profile</span></a>
			  <a class="dropdown-item" href="datebooking.php"><span>Book Slot</span></a>
			  <a class="dropdown-item" href="openbookings.php"><span>Open Booking</span></a>
			  <a class="dropdown-item" href="feedback.php"><span>Give Feedback</span></a>
			  <a class="dropdown-item" href="logout.php"><span>Logout</span></a>
			</div>
		  </li>
		  <?php } else{?>
			
			<li class="nav-item">
				<a class="nav-link" href="#" data-toggle="modal" data-target="#myModal" style="background-color:#808080;"> Login </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" data-toggle="modal" data-target="#myRegisterModal"style="background-color:#808080;">Register</a>
			</li>
			<?php } ?>
		</ul>
	</div>
	<?php }?>
</nav>
<!--End User Navigation-->