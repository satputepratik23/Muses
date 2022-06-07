<?php
include("header.php");
include("connection.php");
$sql="select * from enquiry";
//echo $sql; die;	
$query=mysqli_query($conn,$sql);	
?>


<div class="container-fluid">
<!---Jumbotron---->
<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<center><h1>Enquiry</h1></center>
		</div>
</div>

<div class="container-fluid" style="padding-bottom:5rem;">
<?php
	$rowcount=mysqli_num_rows($query);
	if($rowcount>0)
	{
?>
  <table class='table table-striped' style="font-size:20px;">
    <thead>
      <tr>
       <!--	   <th>Feedbackid</th>-->
        <th>Name</th>
		<th>E-mail</th>
        <th>Phone</th>
		<th>Enquiry Text</th>
		<th>Delete?</th>
      </tr>
    </thead>
    <tbody>
  		<?php while($row=mysqli_fetch_array($query))
		{
			echo "<tr>";
			echo "<td>".$row['name']."</td>";
			echo "<td>".$row['email']."</td>";
			echo "<td>".$row['phone']."</td>";
			echo "<td>".$row['enquiry_text']."</td>";
			echo "<td>"?><a href="deleteenquiry.php?delid=<?=$row['e_id']?>"><i style="color:#000;" class="fa fa-trash"></i></a>
			<?php echo"</td>";
			echo "</tr>";
		} ?>    


	</tbody>
  </table>
  <?php } else { ?>
		<div class="card bg-light text-dark">
			<div class="card-body text-center"> No Records Found </div>
		</div>
	<?php } ?>
</div>
<?php
include("footer.php");
?>

