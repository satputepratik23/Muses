<?php
 include("register-modal.php");
 include("login-modal.php");

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
  <link rel="stylesheet" href="css/style.css">
</head>
<body style="font-family: 'Signika', sans-serif;">



<!---Jumbotron-->
<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<h1 class="text-center text-white" > The Muses Studio</h1>
		</div>
</div>
<!--End Jumbotron-->



<!--Navigation-->
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top justify-text-center">
	<a class="navbar-brand" href="#">MUSES </a>
	
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
			<span class="navbar-toggler-icon"></span>
	</button>
	<!--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
		<span class="navbar-toogler-icon"></span>
	</button>-->
	
	<div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav ml-auto">
			<li class="nav-item">
				<a class="nav-link" href="#home">Home</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#course">About Us</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="../Gallery Grid/index.html">Gallery</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#resources">Services</a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" data-toggle="modal" data-target="#myModal" style="background-color:#808080;"> Login </a>
			</li>
			<li class="nav-item">
				<a class="nav-link" href="#" data-toggle="modal" data-target="#myRegisterModal"style="background-color:#808080;">Register</a>
			</li>
		</ul>
	</div>
</nav>
<!--End Navigation-->

</body>
</html>