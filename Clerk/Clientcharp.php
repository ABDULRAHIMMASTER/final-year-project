<?php
require_once ('../auth.php');
//now, let's register our session variables
include('header.php');
 ?>
<body>
   <div class="row-fluid">
	<div class="alert alert-info">
	<!-- <button type="button" class="close" data-dismiss="alert">&times;</button> -->
         
  <hr>
  </div>
  </div>
  <div class="alert alert-info">
  <?php include('db.php'); 								
								//$result= mysqli_query("select * from shop inner join tz_member_shops on shop.shop_no = tz_member_shops.shop_no inner join tz_members on tz_member_shops.tz_members_id = tz_members.id order by shop.id ASC" ) or die (mysqli_error());
								$result= mysqli_query($conn,"select *, sum(paid_amount)as payd from shop join licence on licence.shop_no = shop.shop_no join payment on payment.licence_no = licence.licence_no join receipt on receipt.receipt_no = payment.receipt_no " ) or die (mysqli_error());
								while ($row= mysqli_fetch_array ($result) ){
								$id=$row['id'];
								$bal = $row['amount'] - $row['payd'];
								
			echo'<p> The vendor has been notified</p>';                                
		   echo' <meta content="2;Charge.php" http-equiv="refresh" />';	
								}
								?>

  
   
  </div>
  </body>
</html>