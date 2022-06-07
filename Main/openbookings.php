<?php
	include("header.php");
	include("connection.php");
	$userid=$_SESSION['loginid'];
	$bookingsql="select * from slot where u_id=$userid";
	$bookingresult=mysqli_query($conn,$bookingsql);
	$showslots=array('10a'=>'10a.m.-11 a.m.','11a'=>'11a.m.-12 p.m.','12p'=>'12p.m.-01 p.m.','1p'=>'01p.m.-02 p.m.','2p'=>'02p.m.-03 p.m.','3p'=>'03p.m.-04 p.m.','4p'=>'04p.m.-05 p.m.','5p'=>'05p.m.-06 p.m.','6p'=>'06p.m.-07 p.m.','7p'=>'07p.m.-08 p.m.','8p'=>'08p.m.-09 p.m.','9p'=>'09p.m.-10 p.m.');
?>


<div class="container" style="padding-top:5rem;padding-bottom:5rem;">
<div class="row">
	<div class="col-md-4"></div>
	<div class="col-md-5" style="padding-bottom:3rem;">
		<h2 style="letter-spacing:0.1rem;font-style:24x;"><strong> Booking Details </strong></h2>
	</div>
</div>
<div class="row">
<div class="col">
<?php
	$rowcount=mysqli_num_rows($bookingresult);
	if($rowcount>0)
	{
?>
  <table class='table table-striped' style="font-size:20px;">
    <thead>
      <tr>
       <!--	   <th>Feedbackid</th>-->
        <th>Sr.No</th>
		<th>Booking Date</th>
        <th>Slot</th>
	<!--	<th>Cancel Booking? <th>-->
      </tr>
    </thead>
    <tbody>
		
  		<?php 
			$i=1;
			while($row=mysqli_fetch_array($bookingresult))
			{
				$of=$row['slot'];
				echo "<tr>";
				echo "<td>".$i++;
				echo "<td>".$row['booking_date'];
				echo "<td>".$showslots[$of];
				?> <!--&nbsp; &nbsp;&nbsp; &nbsp;&nbsp; &nbsp; <a href="deletebooking.php?delid=<?=$row['s_id']?>"><i style="color:#000;" class="fa fa-trash"></i></a>-->
		<?php	echo "</tr>";
			} 
		?>    


	</tbody>
  </table>
  <?php } 
	else{
		?>
		<div class="card bg-light text-dark">
			<div class="card-body text-center"> No Records Found </div>
		</div>
	<?php } ?>
</div>
</div>
</div>

<?php
include("footer.php");
?>