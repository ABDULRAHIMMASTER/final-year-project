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
		  <li class="active"><a href="receiptC.php"> Register Collections</a></li>
		  <li ><a href="Charge.php"> Check Charge</a></li>
		  <li><a href="shop.php">Register shop</a></li>
		<li>
				<strong>&nbsp;<a href="logout.php" class="btn btn-danger lgout">Logout</a></strong></li>
			</ul>
        </div>
        <div class="span12">     
            <div class="container">
<?php include('rgstC.php'); ?>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;">Vendor Name</th>
									<th style="text-align:center;">Licence NO.</th>
                                    <th style="text-align:center;">Receipt NO.</th>
                                    <th style="text-align:center;">Amount Paid</th>
								   <th style="text-align:center;">Date of Pay</th>
								   <th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								//$result= mysqli_query("select * from shop inner join tz_member_shops on shop.shop_no = tz_member_shops.shop_no inner join tz_members on tz_member_shops.tz_members_id = tz_members.id order by shop.id ASC" ) or die (mysqli_error());
								$result= mysqli_query($conn,"select * from tz_members join tz_member_shops on tz_members.id=tz_member_shops.tz_members_id join shop on tz_member_shops.shop_no= shop.shop_no join licence on licence.shop_no = shop.shop_no join payment on payment.licence_no = licence.licence_no join receipt on receipt.receipt_no = payment.receipt_no" ) or die (mysqli_error());
								while ($row= mysqli_fetch_array ($result) ){
								$id=$row['licence_no'];
								?>
								<tr>				
								<td style="text-align:center; word-break:break-all; width:600px;"> <?php echo $row ['names']; ?></td>
								<td style="text-align:center; word-break:break-all; width:400px;"> <?php echo $row ['licence_no']; ?></td>
								<td style="text-align:center; word-break:break-all; width:400px;"> <?php echo $row ['receipt_no']; ?></td>
								<td style="text-align:center; word-break:break-all; width:350px;"> <?php echo $row ['paid_amount']; ?></td>
								<td style="text-align:center; word-break:break-all; width:500px;"> <?php echo $row ['dateofPay']; ?></td>
								<td style="text-align:center; width:350px;">
									<a href="updCol.php<?php echo '?id='.$id; ?>" class="btn btn-info">Update Payments</a>
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