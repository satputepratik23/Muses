<?php
	include("header.php");
	@$id=$_SESSION["loginid"]; 
	@$sql="select * from user where u_id=".$_SESSION['loginid'];
	$query=mysqli_query($conn,$sql);
	@$result=mysqli_fetch_row($query);
	
	$feedback=$_POST['feedback'];
	$fdate=date("Y/m/d h:i:sa");
	$sql="insert into feedback (u_id,feedback_text,feedback_date) values($result[0],'$feedback','$fdate')";
	$query=mysqli_query($conn,$sql);
	if($query){	
	
	
?>

<!---Jumbotron-->
<div class="jumbotron jumbotron-fluid">
		<div class="container"style="padding-top:5rem;padding-bottom:5rem;">
			<h1 class="text-center"> Thank You <b>'<?= $result[1]?>' </b>for providing your valuable feeback. :)</h1>
		</div>
</div>
<!--End Jumbotron-->

<?php
	}else{
		echo "<script>alert('Sorry..Please try again later.')</script>";
?>
<!---Jumbotron-->
<div class="jumbotron jumbotron-fluid">
		<div class="container"style="padding-top:5rem;padding-bottom:5rem;">
			<h1 class="text-center"> Sorry... Please provide your feedback later  :(</h1>
		</div>
</div>
<!--End Jumbotron-->

	<?php } ?>

<script>
function redirectIndex()
{ 
	window.location="index.php";
}
//setTimeout(redirectIndex,2000);
</script>


<?php
include("footer.php");
?>