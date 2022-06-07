<?php
	include("header.php");
	include("connection.php");

	if(isset($_POST['showslots']))
	{
		if(isset($_SESSION['loginid'])) $userid=$_SESSION['loginid'];
		$selecteddate=$_POST['slotdate'];
		$datearr=explode('/',$selecteddate);
		$date=$datearr[2]."-".$datearr[0]."-".$datearr[1];
		$indiandate=$datearr[1]."/".$datearr[0]."/".$datearr[2];
		//echo $indiandate;
	}
?>

<script>
	function validateCheckbox()
	{
		var count_checked = $("[name='slot[]']:checked").length; // count the checked rows
		/*var checkboxs=document.getElementsByName("slot[]");
		var unselected=false;
		var l=checkboxs.length;
		for(var i=0;i<l;i++)
		{
			if(!(checkboxs[i].checked))
			{
				unselected=true;
				break;
			}
		}*/
		if(count_checked==0) { 
			alert("Please select at least one slot.."); 
			return false; 
		}
		//event.preventDefault();
	}
</script>

<div class="container" style="padding-top:5rem;padding-bottom:5rem;font-size:23px;">
<form method="post" action="thanksForBooking.php"  onsubmit="return validateCheckbox()">

	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-4" style="padding-bottom:1rem;"> <h2 style="letter-spacing:0.1rem;"><strong> Choose Slot </strong></h2></div>
    </div>
	<!--row 1-->
		<div class="row">
			<div class="col"> <input type="hidden" name="date" value="<?=$date?>"></div>
			<div class="col"> <input type="hidden" name="indiandate" value="<?=$indiandate?>"></div>
		</div>
		<div class="row">
			<div class="col-md-2"></div>
			<?php
			$slotsquery1="select * from slot,adminslot where (slot.booking_date='$date' and slot.slot='10a') or (adminslot.booking_date='$date' and adminslot.slot='10a' and status='hide')";
			//echo $slotsquery1;
			$slotsresult1=mysqli_query($conn,$slotsquery1);
			//echo mysqli_num_rows($slotsresult1);
			if(mysqli_num_rows($slotsresult1)==0)
			{?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="10a" id="10a">
					<label class="custom-control-label" for="10a"> <strong> 10:00 a.m.- 11:00 a.m.</strong></label>	
				</div>
			</div>
			<?php }
			else{ ?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="10a" id="10a" disabled>
					<label class="custom-control-label" for="10a"> <strong> 10:00 a.m.- 11:00 a.m.</strong></label>	
				</div>
			</div>
			<?php } ?>
			
			<?php
			$slotsquery2="select * from slot,adminslot where (slot.booking_date='$date' and slot.slot='11a') or (adminslot.booking_date='$date' and adminslot.slot='11a' and status='hide')";
			//echo $slotsquery1;
			$slotsresult2=mysqli_query($conn,$slotsquery2);
			//echo mysqli_num_rows($slotsresult1);
			if(mysqli_num_rows($slotsresult2)==0)
			{?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="11a" id="11a">
					<label class="custom-control-label" for="11a"> <strong> 11:00 a.m.- 12:00 p.m.</strong></label>	
				</div>
			</div>
			<?php }
			else{ ?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="11a" id="11a" disabled>
					<label class="custom-control-label" for="11a"> <strong> 11:00 a.m.- 12:00 p.m.</strong></label>	
				</div>
			</div>
			<?php } ?>
			
			<?php
			$slotsquery3="select * from slot,adminslot where (slot.booking_date='$date' and slot.slot='12p') or (adminslot.booking_date='$date' and adminslot.slot='12p' and status='hide')";
			//echo $slotsquery1;
			$slotsresult3=mysqli_query($conn,$slotsquery3);
			//echo mysqli_num_rows($slotsresult1);
			if(mysqli_num_rows($slotsresult3)==0)
			{?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="12p" id="12p">
					<label class="custom-control-label" for="12p"> <strong> 12:00 p.m.- 01:00 p.m.</strong></label>	
				</div>
			</div>
			<?php }
			else{ ?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="12p" id="12p" disabled>
					<label class="custom-control-label" for="12p"> <strong> 12:00 p.m.- 01:00 p.m.</strong></label>	
				</div>
			</div>
			<?php } ?>
			
		</div>
		
		<hr>
		<!--row 2-->
		<div class="row">
			<?php
			$slotsquery4="select * from slot,adminslot where (slot.booking_date='$date' and slot.slot='1p') or (adminslot.booking_date='$date' and adminslot.slot='1p' and status='hide')";
			//echo $slotsquery1;
			$slotsresult4=mysqli_query($conn,$slotsquery4);
			//echo mysqli_num_rows($slotsresult1);
			if(mysqli_num_rows($slotsresult4)==0)
			{?>
			<div class="col-md-2"></div>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="1p" id="1p">
					<label class="custom-control-label" for="1p"> <strong> 01:00 p.m.- 02:00 p.m.</strong></label>	
				</div>
			</div>
			<?php }
			else{ ?>
			<div class="col-md-2"></div>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="1p" id="1p" disabled>
					<label class="custom-control-label" for="1p"> <strong> 01:00 p.m.- 02:00 p.m.</strong></label>	
				</div>
			</div>
			<?php } ?>
			
			<?php
			$slotsquery5="select * from slot,adminslot where (slot.booking_date='$date' and slot.slot='2p') or (adminslot.booking_date='$date' and adminslot.slot='2p' and status='hide')";
			//echo $slotsquery1;
			$slotsresult5=mysqli_query($conn,$slotsquery5);
			//echo mysqli_num_rows($slotsresult1);
			if(mysqli_num_rows($slotsresult5)==0)
			{?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="2p" id="2p">
					<label class="custom-control-label" for="2p"> <strong> 02:00 p.m.- 03:00 p.m.</strong></label>	
				</div>
			</div>
			<?php }
			else{ ?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="2p" id="2p" disabled>
					<label class="custom-control-label" for="2p"> <strong> 02:00 p.m.- 03:00 p.m.</strong></label>	
				</div>
			</div>
			<?php } ?>
			
			<?php
			$slotsquery6="select * from slot,adminslot where (slot.booking_date='$date' and slot.slot='3p') or (adminslot.booking_date='$date' and adminslot.slot='3p' and status='hide')";
			//echo $slotsquery1;
			$slotsresult6=mysqli_query($conn,$slotsquery6);
			//echo mysqli_num_rows($slotsresult1);
			if(mysqli_num_rows($slotsresult6)==0)
			{?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="3p" id="3p">
					<label class="custom-control-label" for="3p"> <strong> 03:00 p.m.- 4:00 p.m.</strong></label>	
				</div>
			</div>
			<?php }
			else{ ?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="3p" id="3p" disabled>
					<label class="custom-control-label" for="3p"> <strong> 03:00 p.m.- 4:00 p.m.</strong></label>	
				</div>
			</div>
			<?php } ?>
		</div>
		
		<hr>
		<!--Row 3-->
		<div class="row">
			<?php
			$slotsquery7="select * from slot,adminslot where (slot.booking_date='$date' and slot.slot='4p') or (adminslot.booking_date='$date' and adminslot.slot='4p' and status='hide')";
			//echo $slotsquery1;
			$slotsresult7=mysqli_query($conn,$slotsquery7);
			//echo mysqli_num_rows($slotsresult1);
			if(mysqli_num_rows($slotsresult7)==0)
			{?>
			<div class="col-md-2"></div>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="4p" id="4p">
					<label class="custom-control-label" for="4p"> <strong> 04:00 p.m.- 05:00 p.m.</strong></label>	
				</div>
			</div>
			<?php }
			else{ ?>
			<div class="col-md-2"></div>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="4p" id="4p" disabled>
					<label class="custom-control-label" for="4p"> <strong> 04:00 p.m.- 05:00 p.m.</strong></label>	
				</div>
			</div>
			<?php } ?>

			<?php
			$slotsquery8="select * from slot,adminslot where (slot.booking_date='$date' and slot.slot='5p') or (adminslot.booking_date='$date' and adminslot.slot='5p' and status='hide')";
			//echo $slotsquery1;
			$slotsresult8=mysqli_query($conn,$slotsquery8);
			//echo mysqli_num_rows($slotsresult1);
			if(mysqli_num_rows($slotsresult8)==0)
			{?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="5p" id="5p">
					<label class="custom-control-label" for="5p"> <strong> 05:00 p.m.- 06:00 p.m.</strong></label>	
				</div>
			</div>
			<?php }
			else{ ?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="5p" id="5p" disabled>
					<label class="custom-control-label" for="5p"> <strong> 05:00 p.m.- 06:00 p.m.</strong></label>	
				</div>
			</div>
			<?php } ?>
			
			<?php
			$slotsquery9="select * from slot,adminslot where (slot.booking_date='$date' and slot.slot='6p') or (adminslot.booking_date='$date' and adminslot.slot='6p' and status='hide')";
			//echo $slotsquery1;
			$slotsresult9=mysqli_query($conn,$slotsquery9);
			//echo mysqli_num_rows($slotsresult1);
			if(mysqli_num_rows($slotsresult9)==0)
			{?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="6p" id="6p">
					<label class="custom-control-label" for="6p"> <strong> 06:00 p.m.- 07:00 p.m.</strong></label>	
				</div>
			</div>
			<?php }
			else{ ?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="6p" id="6p" disabled>
					<label class="custom-control-label" for="6p"> <strong> 06:00 p.m.- 07:00 p.m.</strong></label>	
				</div>
			</div>
			<?php } ?>
			
		</div>
		
		<hr>
		<!--Row 4-->
	
		<div class="row">
			<?php
			$slotsquery10="select * from slot,adminslot where (slot.booking_date='$date' and slot.slot='7p') or (adminslot.booking_date='$date' and adminslot.slot='7p' and status='hide')";
			//echo $slotsquery1;
			$slotsresult10=mysqli_query($conn,$slotsquery10);
			//echo mysqli_num_rows($slotsresult1);
			if(mysqli_num_rows($slotsresult10)==0)
			{?>
			<div class="col-md-2"></div>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="7p" id="7p">
					<label class="custom-control-label" for="7p"> <strong> 07:00 p.m.- 08:00 p.m.</strong></label>	
				</div>
			</div>
			<?php }
			else{ ?>
			<div class="col-md-2"></div>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="7p" id="7p" disabled>
					<label class="custom-control-label" for="7p"> <strong> 07:00 p.m.- 08:00 p.m.</strong></label>	
				</div>
			</div>
			<?php } ?>
			
			<?php
			$slotsquery11="select * from slot,adminslot where (slot.booking_date='$date' and slot.slot='8p') or (adminslot.booking_date='$date' and adminslot.slot='8p' and status='hide')";
			//echo $slotsquery1;
			$slotsresult11=mysqli_query($conn,$slotsquery11);
			//echo mysqli_num_rows($slotsresult1);
			if(mysqli_num_rows($slotsresult11)==0)
			{?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="8p" id="8p">
					<label class="custom-control-label" for="8p"> <strong> 08:00 p.m.- 09:00 p.m.</strong></label>	
				</div>
			</div>
			<?php }
			else{ ?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="8p" id="8p" disabled>
					<label class="custom-control-label" for="8p"> <strong> 08:00 p.m.- 09:00 p.m.</strong></label>	
				</div>
			</div>
			<?php } ?>
			
			<?php
			$slotsquery12="select * from slot,adminslot where (slot.booking_date='$date' and slot.slot='9p') or (adminslot.booking_date='$date' and adminslot.slot='9p' and status='hide')";
			//echo $slotsquery1;
			$slotsresult12=mysqli_query($conn,$slotsquery12);
			//echo mysqli_num_rows($slotsresult1);
			if(mysqli_num_rows($slotsresult12)==0)
			{?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="9p" id="9p">
					<label class="custom-control-label" for="9p"> <strong> 9:00 p.m.- 10:00 p.m.</strong></label>	
				</div>
			</div>
			<?php }
			else{ ?>
			<div class="col-md-3"> 
				<div class="custom-control custom-checkbox">
					<input type="checkbox" class="custom-control-input" name="slot[]" value="9p" id="9p" disabled>
					<label class="custom-control-label" for="9p"> <strong> 9:00 p.m.- 10:00 p.m.</strong></label>	
				</div>
			</div>
			<?php } ?>
		</div>
		
		<div class="row" style="padding-top:3rem;">
			<div class="col-md-2"></div>
			<div class="col-md-4"> 
				<?php if(isset($_SESSION['loginid'])) { ?>
					<button type="submit" name="submitdate" class="btn btn-outline-dark btn-lg">Book Now</button>
				<?php } else{ ?>
					<button type="submit" name="submitdate" class="btn btn-outline-dark btn-lg">Disable Now</button>
				<?php } ?>
			</div>
			<!--<div class="col-md-4"> 
				<a href="datebooking.php"> Modify Date </a>
			</div>-->
		</div>
</div>

<?php
	include("footer.php");
?>