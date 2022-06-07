<?php
	include("header.php");
	include("connection.php");
	$slotarr=$_POST['slot'];
	$date=$_POST['date'];
	$noofslots=count($slotarr);
	$showslots=array('10a'=>'10a.m.-11 a.m.','11a'=>'11a.m.-12 p.m.','12p'=>'12p.m.-01 p.m.','1p'=>'01p.m.-02 p.m.','2p'=>'02p.m.-03 p.m.','3p'=>'03p.m.-04 p.m.','4p'=>'04p.m.-05 p.m.','5p'=>'05p.m.-06 p.m.','6p'=>'06p.m.-07 p.m.','7p'=>'07p.m.-08 p.m.','8p'=>'08p.m.-09 p.m.','9p'=>'09p.m.-10 p.m.');
	$indiandate=$_POST['indiandate'];
	
	if(isset($_SESSION["adminlogin"]))
	{
		//--------admin slots----------
		for($i=0;$i<count($slotarr);$i++)
		{
			//Entries in adminslot table for each slot by admin
			$sql = "INSERT INTO adminslot (slot,booking_date)
			VALUES ('$slotarr[$i]','$date')";
			$query=mysqli_query($conn,$sql);
			
			$sql2="select * from adminslot where booking_date='$date'";
			$disabledquery=mysqli_query($conn,$sql2);	
		}
	}
	else{
		// ----------Customer slots-------- 
	$userid=$_SESSION['loginid'];
	$getuser="select * from user where u_id=".$_SESSION['loginid'];
	$query0=mysqli_query($conn,$getuser);
	$result=mysqli_fetch_row($query0);
	$flag=false;
	$totalamount=0;
	//$newSlotArrayToUpdate=array();
	for($i=0;$i<count($slotarr);$i++)
	{
		//Entries in slot table for each slot by customer
		$sql = "INSERT INTO slot (u_id,slot,booking_date,amount)
		VALUES ($userid,'$slotarr[$i]','$date',300)";
		$query=mysqli_query($conn,$sql);
		if($query){
			$flag=true;
			/*while($row=mysqli_fetch_array($query))
			{
				array_push($newSlotArrayToUpdate,$row['s_id']);
				$newSlotArrayToUpdate[$i]=$row['s_id'];
				echo "----$newSlotArrayToUpdate[$i]";
			}*/
		}
		else{
			echo "not inserted";
		}
		//print_r($newSlotArrayToUpdate);
	}
	if($flag==true)
	{
		$totalamount=$noofslots*300;
		$sql3="insert into booking (u_id,booking_date,booking_total) values($userid,'$date',$totalamount)";
			
			
		//	echo $sql3;
			if(mysqli_query($conn,$sql3))
			{
				$last_bid=mysqli_insert_id($conn);
				$sql4="insert into payment (b_id,payment_amount,payment_date) values($last_bid,$totalamount,'$date')";
				
				mysqli_query($conn,$sql4); //insert into payment
			}
	}
	}
?>

<!---Jumbotron-->
<?php if(isset($_SESSION['loginid'])) { ?>
<div class="jumbotron jumbotron-fluid">
		<div class="container"style="padding-top:5rem;">
			<h1 class="text-center"> Congratulations "<?=$result[1];?>"</h1>
			<p class="mt-3 text-center" style="font-size:23px;">
			Your booking is partially confirmed. Please complete the payment by scanning following QR Code. Payment can be done via any BHIM UPI supported applications.<br>Booking details are as follows.<br>Once you pay, you will be notified about confirmation ASAP. Please wait for further details.<br><br>Regards, Muses Studio.
			</p>
		</div>
</div>

<div class="container" style="padding-bottom:5rem;">
  <table class='table table-striped' style="font-size:20px;">
    <thead>
      <tr>
       <!--	   <th>Feedbackid</th>-->
        <th>Slot No</th>
		<th>Time Slot</th>
      </tr>
    </thead>
    <tbody>
		<?php
			for($i=0;$i<$noofslots;$i++)
			{
				echo "<tr>";
				$n=$i+1;
				echo "<td>$n";
				$of=$slotarr[$i];
				echo "<td> $showslots[$of]";
				echo "</tr>";
			}
		?>
		<tr>
			<th> Date
			<th> <?=$indiandate;?>
		</tr>	
		<tr>
			<th> Total Amount
			<th> Rs.<?=$totalamount;?>
		</tr>	
</tbody>
</table>

<center>
	<br><br><p> Scan following QRCode for payment </p>
	<img src="../Images/qrcode.jpg" style="height:200px;width:200px;"> 
</center>

</div>
<?php }else { ?>
	<div class="jumbotron jumbotron-fluid">
		<div class="container"style="padding-top:5rem;">
			<h1 class="text-center"> Disabled Successfully !!</h1>
			<p class="mt-3 text-center" style="font-size:23px;">
				Following slots are disabled on <?=$indiandate?>.
			</p>
		</div>
	</div>
	<div class="container" style="padding-bottom:3rem;">
		<table class='table table-striped'>
		<thead>
		  <tr>
			<th>Sr.no</th>
			<th>Slot</th>
		  </tr>
		</thead>
		<tbody>
			<?php
			for($i=0;$i<$noofslots;$i++)
			{
				echo "<tr>";
				$n=$i+1;
				echo "<td>$n";
				$of=$slotarr[$i];
				echo "<td> $showslots[$of]";
				echo "</tr>";
			}
		/* while($row=mysqli_fetch_array($disabledquery))
			{
				echo "<tr>";
				echo "<td>".$row['booking_date']."</td>";
				echo "<td>".$row['slot']."</td>";
				echo "</tr>";
			} */?>
	  </tbody>
	  </table>
	</div>
	
	

<?php } ?>
 
<?php
include("footer.php");
?>