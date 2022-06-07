<?php
include("header.php");
include("connection.php");
$from=$_POST['from'];
$to=$_POST['to'];
$fromdate=explode('/',$from);
$todate=explode('/',$to);
$fdate=$fromdate[2]."-".$fromdate[0]."-".$fromdate[1]; //2(year) 0(month) 1(day)
$tdate=$todate[2]."-".$todate[0]."-".$todate[1];
$sql="select * from slot where booking_date>='$fdate' and booking_date<='$tdate'";
//echo $sql; die;	
$query=mysqli_query($conn,$sql);

$showslots=array('10a'=>'10a.m.-11 a.m.','11a'=>'11a.m.-12 p.m.','12p'=>'12p.m.-01 p.m.','1p'=>'01p.m.-02 p.m.','2p'=>'02p.m.-03 p.m.','3p'=>'03p.m.-04 p.m.','4p'=>'04p.m.-05 p.m.','5p'=>'05p.m.-06 p.m.','6p'=>'06p.m.-07 p.m.','7p'=>'07p.m.-08 p.m.','8p'=>'08p.m.-09 p.m.','9p'=>'09p.m.-10 p.m.');	
?>


<div class="container-fluid">
<!---Jumbotron---->
<div class="jumbotron jumbotron-fluid">
		<div class="container">
			<center><h1>Slots</h1></center>
		</div>
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
       <!--	   <th>Feedbackid</th>-->
        <th>Sr.no</th>
		<th>Date</th>
        <th>Slot</th>
      </tr>
    </thead>
    <tbody>
  		<?php $i=1;
		while($row=mysqli_fetch_array($query))
		{
			$s=$row['slot']; //slot
			echo "<tr>";
			echo "<td>".$i; $i=$i+1;
			echo "<td>".$row['booking_date']."</td>";
			echo "<td>".$showslots[$s]."</td>";
			/*echo "<td>"?><a href="deletefeedback.php?delid=<?=$row['f_id']?>"><i style="color:#000;" class="fas fa-eye"></i></a>
			<?php echo "<td>"?><a href="deletefeedback.php?delid=<?=$row['f_id']?>"><i style="color:#000;" class="fa fa-eye-slash"></i></a>
			<?php echo"</td>";*/
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

