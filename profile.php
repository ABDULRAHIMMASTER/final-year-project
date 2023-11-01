<?php
require_once ('authv.php');
//now, let's register our session variables
include('connect.php');
include('header.php'); 
?>
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
		  <li><a href="vendor.php">Check Balance</a></li>
		  <li><a href="receipt.php"> Register Receipt details</a></li>
		  <li class="active"><a href="profile.php"> Update Account</a></li>
		<li>
				<strong>&nbsp;<a href="logout.php" class="btn btn-danger lgout">Logout</a></strong></li>
			</ul>
        </div>
        <div class="span12">     
            <div class="container">

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Account Details</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;" >Image</th>
                                    <th style="text-align:center;">Name</th>
                                    <th style="text-align:center;">Address</th>
                                    <th style="text-align:center;">Email</th>
									<th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								$result= mysqli_query("select * from tz_members inner join tz_member_shops on tz_members.id=tz_member_shops.tz_members_id where usr = '$user_n'" ) or die (mysqli_error());
								while ($row= mysqli_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr>
								<td style="text-align:center; margin-top:10px; word-break:break-all; width:150px; line-height:50px;"><a href="#<?php  echo $id;?>" data-toggle="modal">
									<?php if($row['photo'] != ""): ?>
									<img src="upload/<?php echo $row['photo']; ?>" width="50px" height="50px" style="border:1px solid #333333;">
									<?php else: ?>
									<img src="images/userpic.png" width="50px" height="50px" style="border:1px solid #333333;">
									<?php endif; ?>
									</a>
								</td>
								<td style="text-align:center; word-break:break-all; width:400px;"> <?php echo $row ['names']; ?></td>
								<td style="text-align:center; word-break:break-all; width:350px;"> <?php echo $row ['address']; ?></td>
								<td style="text-align:center; word-break:break-all; width:500px;"> <?php echo $row ['email']; ?></td>
								<td style="text-align:center; width:350px;">
									<a href="edit.php<?php echo '?id='.$id; ?>" class="btn btn-info">Edit Details</a>
								</td>
								</tr>

								<!-- Modal Bigger Image -->
								<div id="<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">

								<h3 id="myModalLabel"><b><?php echo $row['names']; ?></b></h3>
								</div>
								<div class="modal-body">
								<?php if($row['photo'] != ""): ?>
								<img src="upload/<?php echo $row['photo']; ?>" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php else: ?>
								<img src="images/default.png" style="width:390px; border-radius:9px; border:5px solid #d0d0d0; margin-left: 63px; height:387px;">
								<?php endif; ?>
								</div>
								<div class="modal-footer">
								<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
								</div>
								</div>

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