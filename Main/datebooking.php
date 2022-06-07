<?php
include("header.php");
?>

<script>
  $( function() {
    $( "#datepicker" ).datepicker();
  } );
</script>

<div class="container" style="padding-top:5rem;padding-bottom:5rem;font-size:23px;">
<form method="post" action="selectslot.php">
	<div class="row">
		<div class="col-md-2"></div>
		<?php if(isset($_SESSION['adminlogin'])) {?>
		<div class="col-md-4" style="padding-bottom:1rem;"> <h2 style="letter-spacing:0.1rem;"><strong> Manage Slot </strong></h2></div>
		<?php }else{?>
		<div class="col-md-4" style="padding-bottom:1rem;"> <h2 style="letter-spacing:0.1rem;"><strong> Book Slot </strong></h2></div>
		<?php } ?>
    </div>
	
	<div class="row" style="padding-bottom:2rem;">
		<div class="col-md-2"></div>
		<div class="col-md-4" style="padding-bottom:1rem;"> 
			<h4><input type="text" name="slotdate" id="datepicker" placeholder="------Select Date------" required></h4>
		</div>
    </div>
	
	
	<div class="row" style="padding-bottom:2rem;">
		<div class="col-md-2"></div>
		<div class="col-md-4"> 
			<button type="submit" name="showslots" class="btn btn-outline-dark btn-lg">Show Slots</button>
		</div>
	</div> 
</form>
</div>

<?php
include("footer.php");
?>



