<?php
include("header.php");
include("connection.php");
$from=$_POST['from'];
$to=$_POST['to'];
$fromdate=explode('/',$from);
$todate=explode('/',$to);
$fdate=$fromdate[2]."-".$fromdate[0]."-".$fromdate[1]; //2(year) 0(month) 1(day)
$tdate=$todate[2]."-".$todate[0]."-".$todate[1];
$ddmmyyfrom=$fromdate[1]."-".$fromdate[0]."-".$fromdate[2];
$ddmmyyto=$todate[1]."-".$todate[0]."-".$todate[2];
$sql="select * from payment,user,booking where payment.b_id=booking.b_id and user.u_id=booking.u_id and payment_date>='$fdate' and payment_date<='$tdate'";
//echo $sql; die;	
$query=mysqli_query($conn,$sql);

?>


<!---Jumbotron---->
<div class="jumbotron jumbotron-fluid">
	<center><h1>Payment-List from '<?=$ddmmyyfrom?>'  to  '<?=$ddmmyyto?>'</h1></center>
</div>
<div class="container" style="padding-top:5rem;padding-bottom:5rem;">
<?php
	$rowcount=mysqli_num_rows($query);
	if($rowcount>0)
	{
?>
  <table class='table table-striped' style="font-size:20px;">
    <thead>
      <tr>
        <th>Name</th>
		<th>Date</th>
        <th>Amount</th>
		<th>Status</th>
      </tr>
    </thead>
    <tbody>
  		<?php while($row=mysqli_fetch_array($query))
		{
			echo "<tr>";
			echo "<td>".$row['u_name']."</td>";
			echo "<td>".$row['booking_date']."</td>";
			echo "<td>".$row['payment_amount']."</td>";
			echo "<td>".$row['payment_status']."</td>";
		} ?>    


	</tbody>
  </table>
  <div class="container">
	<center><a class="bootstrap-link" href="payment-list.php"> Please Click Here To Edit Payment Action</a></center>
  </div>
	<?php } else { ?>
		<div class="card bg-light text-dark">
			<div class="card-body text-center"> No Records Found </div>
		</div>
	<?php } ?>
</div>
<?php
include("footer.php");
?>

