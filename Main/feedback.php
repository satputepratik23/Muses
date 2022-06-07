<?php
include("header.php");

?>

<div class="container" style="padding-top:5rem;padding-bottom:5rem;">
<form method="post" action="thanksForFeedback.php">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-2" style="padding-bottom:1rem;"> <h2 style="letter-spacing:0.1rem;"><strong> Feedback </strong></h2></div>
    </div>
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-9" style="padding-bottom:2rem;"> 
			<textarea class="form-control" rows="6" placeholder="Please provide your feedback here" name="feedback" style="font-size:20px;" required></textarea>
			</div>
	</div>
	
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-9"> 
			<button type="submit" name="update" class="btn btn-outline-dark btn-lg btn-block">Submit</button>
		</div>
	</div>
</form>
</div>

<?php
include("footer.php");