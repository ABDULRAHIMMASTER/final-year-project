<?php
require_once ('authv.php');
//now, let's register our session variables
include('connect.php'); 
include('header.php'); ?>
 <body>
   <div class="row-fluid">
	<div class="alert alert-info">
	<!-- <button type="button" class="close" data-dismiss="alert">&times;</button> -->
          <img src="images/header.png" alt="--">
  <hr>
	</div>
	
    <div class="alert alert-info"> 
        <ul>
		  <li><a href="vendorhome.php">Home</a></li>
		  <li class="active"><a href="vendor.php">Notifications</a></li>
		  <li><a href="receipt.php"> Register Receipt details</a></li>
		  <li><a href="profile.php"> Update Account</a></li>
		<li>
				<strong>&nbsp;<a href="logout.php" class="btn btn-danger lgout">Logout</a></strong></li>
			</ul>
        </div>
		
        <div class="span12">     
            <div class="container">
<?php //include('rgstC.php'); ?>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Charge Details</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;">Licence NO.</th>
                                    <th style="text-align:center;">Shop NO.</th>
                                    <th style="text-align:center;">Amount Paid</th>
								   <th style="text-align:center;">Last Pay Date </th>
								   <th style="text-align:center;">Licence Expiry Date </th>
								   <th style="text-align:center;">Days Exceeded on Licence </th>
								   <th style="text-align:center; background: linear-gradient(#ffdd7f 5%, #ffbc00 100%);" >Charge(Fine)</th>
									
                                   <th style="text-align:center;">Balance with Charge</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								//$result= mysqli_query("select * from shop inner join tz_member_shops on shop.shop_no = tz_member_shops.shop_no inner join tz_members on tz_member_shops.tz_members_id = tz_members.id order by shop.id ASC" ) or die (mysqli_error());
								$result= mysqli_query("select *, sum(paid_amount)as payd from tz_members join tz_member_shops on tz_members.id = tz_member_shops.tz_members_id join shop on tz_member_shops.shop_no = shop.shop_no join licence on licence.shop_no = shop.shop_no join payment on payment.licence_no = licence.licence_no join receipt on receipt.receipt_no = payment.receipt_no where usr='$user_n'" ) or die (mysqli_error());
								while ($row= mysqli_fetch_array ($result) ){
								$id=$row['id'];
								
								/*
								$date1 = $row ['dateofPay'];
								$date2 = $row ['ExpiryDate'];

								$diff = abs(strtotime($date1) - strtotime($date2));

								$years = floor($diff / (365*60*60*24));
								$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
								$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

								//printf("%d years, %d months, %d days\n", $years, $months, $days);
								*/
								
								//$dat=($interval/(60*60*24))%365;
								//$fine = 1000 * $dat;
								//echo $interval->format('%R%a days');


								
								?>
								<tr>				
								<td style="text-align:center; word-break:break-all; width:100px;"> <?php echo $row ['licence_no']; ?></td>
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['shop_no']; ?></td>
								<td style="text-align:center; word-break:break-all; width:650px;"> <font color="red" size="3">UGX</font>&nbsp;&nbsp;&nbsp;<?php echo $row ['payd']; ?></td>
								
								<td style="text-align:center; word-break:break-all; width:500px;"> <?php echo $row ['dateofPay']; ?></td>
								<td style="text-align:center; word-break:break-all; width:500px;"> <?php echo $row ['ExpiryDate']; ?></td>
								<td style="text-align:center; word-break:break-all; width:500px;"> <font color="red" size="3"><?php 
								$datetime1 = date_create($row ['dateofPay']);
								$datetime2 = date_create($row ['ExpiryDate']);
								$interval = date_diff($datetime2, $datetime1);
								echo $interval->format('%a'); ?></font> Days</td>
								<td style="text-align:center; word-break:break-all; width:500px;"> <?php 
								
								$datetime1 = date_create($row ['dateofPay']);
								$datetime2 = date_create($row ['ExpiryDate']);
								$interval = date_diff($datetime2, $datetime1);
								if($datetime1>$datetime2){
								$fine=$interval->format('%a')*1000;
								echo '<font color="red" size="3">UGX</font>&nbsp;&nbsp;&nbsp;'.$interval->format('%a')*1000; }
								else{
								echo '<font color="red" size="3">No Charge Yet</font>';
								}
								
								?></td>
								
								<td style="text-align:center; word-break:break-all; width:1000px;"> <font color="red" size="3">UGX</font>&nbsp;&nbsp;&nbsp;<?php 
								$s=$row['amount'];
								$d=$row['payd'];
								if($s>$d){								
								$bal = ($s - $d)+$fine;
								echo $bal;
								}
								else{
								$bals = ($d - $s)- $fine;
								echo  $bals. ' is owed';
								} ?></td>
								</tr>


								<?php } ?>
                            </tbody>
                        </table>


          
        </div>
        </div>
        </div>
    </div>
  </div>
  </body>
</html>