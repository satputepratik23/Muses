<?php
include("header.php");
?>

<script>
  $( function() {
    $( "#datepicker1" ).datepicker();
  } );
  
  $( function() {
    $( "#datepicker2" ).datepicker();
  } );
</script>

<div class="container" style="padding-top:5rem;padding-bottom:5rem;font-size:23px;">
<form method="post" action="payment-list-by-date-2.php">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4" style="padding-bottom:1rem;"> <h2 style="letter-spacing:0.1rem;"><strong> Select Date </strong></h2></div>
    </div>
	
	<div class="row" style="padding-bottom:2rem;">
		<div class="col-md-2"></div>
		<div class="col-md-4" style="padding-bottom:1rem;"> 
			<h4><input type="text" name="from" id="datepicker1" placeholder="------Select From------" required></h4>
		</div>
		<div class="col-md-4" style="padding-bottom:1rem;"> 
			<h4><input type="text" name="to" id="datepicker2" placeholder="--------Select To--------" required></h4>
		</div>
    </div>
	
	
	<div class="row" style="padding-bottom:2rem;">
		<div class="col-md-2"></div>
		<div class="col-md-4"> 
			<button type="submit" name="showslots" class="btn btn-outline-dark btn-lg">Show Payment Details</button>
		</div>
	</div> 
</form>
</div>

<?php
include("footer.php");
?>



