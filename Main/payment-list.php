<?php
include("header.php");
include("connection.php");
$sql="select * from payment,user,booking where payment.b_id=booking.b_id and user.u_id=booking.u_id";
// echo $sql; die;	
$query=mysqli_query($conn,$sql);
	
?>



<!---Jumbotron---->
<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<center><h1>Payment List</h1></center>
		</div>
</div>
<div class="container-fluid" style="padding-bottom:5rem;">
  <table class='table table-striped' style="font-size:20px;">
    <thead>
      <tr>
        <th>Name</th>
		<th>Date</th>
        <th>Amount</th>
		<th>Status</th>
		<th>Action</th>
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
			echo "<td>"?><a href="payment-status.php?complete1=<?=$row['p_id']?>"><i style="color:#00ff00;" class="fa fa-check"></i></a> &nbsp; &nbsp; &nbsp; &nbsp;
			<a href="payment-status.php?reject1=<?=$row['p_id']?>"><i style="color:#ff0000" class="fas fa-times"></i></a> &nbsp; &nbsp; &nbsp; &nbsp;
			
			<?php echo"</td>"; //reject1 and complete1 to distinguish request from pg payment-list-by-date-1.php
			echo "</tr>";
		} ?>    


	</tbody>
  </table>
</div>
<?php
include("footer.php");
?>

