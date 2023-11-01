<?php
require_once ('../auth.php');
//now, let's register our session variables
include('db.php');
include('header.php'); ?>
 <body>
   <div class="row-fluid">
	<div class="alert alert-info">
	<!-- <button type="button" class="close" data-dismiss="alert">&times;</button> -->
          
  <hr>
	</div>
	
    <div class="alert alert-info"> 
        <ul>
		  <li><a href="home.php">Home</a></li>
		  <li><a href="rgstvendor.php">Register Vendor</a></li>
		  <li><a href="receiptC.php"> Register Collections</a></li>
		  <li class="active" ><a href="Charge.php"> Check Charge</a></li>
		  <li><a href="shop.php">Register shop</a></li>
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
									<!--<th style="text-align:center;">Action</th>-->
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								//$result= mysqli_query("select * from shop inner join tz_member_shops on shop.shop_no = tz_member_shops.shop_no inner join tz_members on tz_member_shops.tz_members_id = tz_members.id order by shop.id ASC" ) or die (mysqli_error());
								$result= mysqli_query($conn,"select *, sum(paid_amount)as payd from shop join licence on licence.shop_no = shop.shop_no join payment on payment.licence_no = licence.licence_no join receipt on receipt.receipt_no = payment.receipt_no " ) or die (mysqli_error());
								while ($row= mysqli_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr>				
								<td style="text-align:center; word-break:break-all; width:200px;"> <?php echo $row ['licence_no']; ?></td>
								<td style="text-align:center; word-break:break-all; width:400px;"> <?php echo $row ['shop_no']; ?></td>
								<td style="text-align:center; word-break:break-all; width:550px;"> <font color="red" size="3">NGN</font>&nbsp;&nbsp;&nbsp;<?php echo $row ['payd']; ?></td>
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
								echo '<font color="red" size="3">NGN</font>&nbsp;&nbsp;&nbsp;'.$interval->format('%a')*1000; }
								else{
								$fine=0;
								echo '<font color="red" size="3">No Charge Yet</font>';
								}
								
								?></td>
								
								<td style="text-align:center; word-break:break-all; width:1000px;"> <font color="red" size="3">NGN</font>&nbsp;&nbsp;&nbsp;<?php 
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
								<!-- <td style="text-align:center; width:350px;">
									<a href="Clientcharp.php<?php echo '?id='.$id; ?>" class="btn btn-info">Notify Vendor of Charge</a>
								</td> -->
								
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