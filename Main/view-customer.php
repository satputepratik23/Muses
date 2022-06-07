<?php
include("header.php");
include("connection.php");
$sql="select * from user";
$query=mysqli_query($conn,$sql);	
?>


 <!---Jumbotron---->
<div class="jumbotron jumbotron-fluid">
	<center><h1>Customers</h1></center>	
</div>
<div class="container-fluid" style="padding-bottom:5rem;">
  <table class='table table-striped' style="font-size:20px">
    <thead>
      <tr>
        <th>Userid</th>
        <th>Username</th>
		<th>Phone</th>
        <th>Email</th>
		<th>Password</th>
		<th>Band</th>
		<th>Delete Customer?</th>
		
      </tr>
    </thead>
    <tbody>
  		<?php while($row=mysqli_fetch_array($query))
		{
			echo "<tr>";
			echo "<td>".$row['u_id']."</td>";
			echo "<td>".$row['u_name']."</td>";
			echo "<td>".$row['u_phone']."</td>";
			echo "<td>".$row['u_email']."</td>";
			echo "<td>".$row['u_password']."</td>";
			echo "<td>".$row['u_band']."</td>";
			echo "<td>"?><a href="deletecustomer.php?delid=<?=$row['u_id']?>"><i style="color:#000;" class="fa fa-trash"></i></a>
			<?php echo"</td>";
			echo "</tr>";
		}     
  ?>
  
  </tbody>
  </table>
</div>
<?php
include("footer.php");
?>