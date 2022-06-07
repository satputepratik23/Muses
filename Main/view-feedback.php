<?php
include("header.php");
include("connection.php");
$sql="select * from feedback LEFT JOIN user ON feedback.u_id=user.u_id";
//echo $sql; die;	
$query=mysqli_query($conn,$sql);	
?>


<div class="container-fluid">
<!---Jumbotron---->
<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<center><h1>Feedback</h1></center>
		</div>
</div>
<div class="container-fluid" style="padding-bottom:5rem;">
  <table class='table table-striped' style="font-size:20px;">
    <thead>
      <tr>
       <!--	   <th>Feedbackid</th>-->
        <th>Username</th>
		<th>Feedback</th>
        <th>Date</th>
		<th>Delete?</th>
      </tr>
    </thead>
    <tbody>
  		<?php while($row=mysqli_fetch_array($query))
		{
			echo "<tr>";
			echo "<td>".$row['u_name']."</td>";
			echo "<td>".$row['feedback_text']."</td>";
			echo "<td>".$row['feedback_date']."</td>";
			echo "<td>"?><a href="deletefeedback.php?delid=<?=$row['f_id']?>"><i style="color:#000;" class="fa fa-trash"></i></a>
			<?php echo"</td>";
			echo "</tr>";
		} ?>    


	</tbody>
  </table>
</div>
<?php
include("footer.php");
?>

