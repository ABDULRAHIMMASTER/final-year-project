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
  <hr>
  <hr>
	</div>
	
    <div class="alert alert-info"> 
        <ul>
		  <li><a href="home.php">Home</a></li>
		  <li ><a href="rgstvendor.php">Register Vendor</a></li>
		  <li class="active"><a href="receipt.php"> Verify Receipts</a></li>
		  <li ><a href="Charge.php"> Check Charge</a></li>		  
		  <li><a href="shopowners.php">Verify Shop Details</a></li>
		<li>
				<strong>&nbsp;<a href="logout.php" class="btn btn-danger lgout">Logout</a></strong></li>
			</ul>
        </div>
        <div class="span12">     
            <div class="container">

                         <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                 <!-- <strong><i class="icon-user icon-large"></i>&nbsp;Charge Details</strong>-->
	<button class="btn btn-primary" onClick="window.print();"><i class="icon-save icon-large"></i>Print Details</button>
                            </div>
                            <thead>
                                <tr>
                                   <th style="text-align:center;">Receipt NO.</th>
								   <th style="text-align:center;">Shop NO.</th>
                                   <th style="text-align:center;">Vendor Name</th>
                                    <th style="text-align:center;">Amount On Receipt</th>
                                   <!-- <th style="text-align:center;">Balance</th> -->
								   <th style="text-align:center;">Date of Payment</th>
								   <th style="text-align:center; background: linear-gradient(#ffdd7f 5%, #ffbc00 100%);" >Action</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
								//$result= mysqli_query("select * from tz_members join tz_member_shops on tz_members.id=tz_member_shops.tz_members_id join shop on tz_member_shops.shop_no= shop.shop_no join licence on licence.shop_no = shop.shop_no join payment on payment.licence_no = licence.licence_no join receipt on receipt.receipt_no = payment.receipt_no where receipt.active='0'" ) or die (mysqli_error());
								//$result= mysqli_query("select *, sum(paid_amount)as payd from tz_members join tz_member_shops on tz_members.id=tz_member_shops.tz_members_id join shop on tz_member_shops.shop_no= shop.shop_no join licence on licence.shop_no = shop.shop_no join payment on payment.licence_no = licence.licence_no join receipt on receipt.receipt_no = payment.receipt_no where receipt.active='0'" ) or die (mysqli_error());
								$result= mysqli_query($conn,"select * from tz_members join tz_member_shops on tz_members.id=tz_member_shops.tz_members_id join shop on tz_member_shops.shop_no= shop.shop_no join licence on licence.shop_no = shop.shop_no join payment on payment.licence_no = licence.licence_no join receipt on receipt.receipt_no = payment.receipt_no where receipt.active='0'" ) or die (mysqli_error());
								while ($row= mysqli_fetch_array ($result) ){
								$id=$row['receipt_no'];
								//$bal = $row['amount'] - $row['payd'];
								?>
								<tr>	
								<td style="text-align:center; word-break:break-all; width:400px;"> <?php echo $row ['receipt_no']; ?></td>
								<td style="text-align:center; word-break:break-all; width:400px;"> <?php echo $row ['shop_no']; ?></td>
								<td style="text-align:center; word-break:break-all; width:400px;"> <?php echo $row ['names']; ?></td>
								<td style="text-align:center; word-break:break-all; width:350px;"> <font color="red" size="3">NGN</font>&nbsp;&nbsp;&nbsp;<?php echo $row ['paid_amount']; ?></td>
								<!-- <td style="text-align:center; word-break:break-all; width:500px;"> <font color="red" size="3">UGX</font>&nbsp;&nbsp;&nbsp;<?php //echo $bal; ?></td> -->
								<td style="text-align:center; word-break:break-all; width:500px;"> <?php echo $row ['dateofPay']; ?></td>
								<td style="text-align:center; width:350px;">
									<a href="verfyrec.php<?php echo '?id='.$id; ?>" class="btn btn-info">Verify Receipt</a>
								</td>
								
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