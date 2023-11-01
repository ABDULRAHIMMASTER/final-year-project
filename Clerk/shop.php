<?php
require_once ('../auth.php');
//now, let's register our session variables
include('db.php'); 
include('header.php');
 ?>
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
		  <li ><a href="Charge.php"> Check Charge</a></li>
		  <li class="active"><a href="shop.php">Register shop</a></li>
		<li>
				<strong>&nbsp;<a href="logout.php" class="btn btn-danger lgout">Logout</a></strong></li>
			</ul>
        </div>
        <div class="span12">     
            <div class="container">
<?php include('rgstshop.php'); ?>

                        <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-bordered" id="example">
                            <div class="alert alert-info">
                                <button type="button" class="close" data-dismiss="alert">&times;</button>
                                <strong><i class="icon-user icon-large"></i>&nbsp;Data Table</strong>
                            </div>
                            <thead>
                                <tr>
                                    <th style="text-align:center;">SHOP NO.</th>
                                    <th style="text-align:center;">FLOOR LEVEL</th>
                                    <th style="text-align:center;">SECTION</th>
                                    <!--<th style="text-align:center;">OWNER</th>-->
									<th style="text-align:center;">Action</th>
                                </tr>
                            </thead>
                            <tbody>
								<?php
								
								//$result= mysqli_query("select * from shop inner join tz_member_shops on shop.shop_no = tz_member_shops.shop_no inner join tz_members on tz_member_shops.tz_members_id = tz_members.id order by shop.id ASC" ) or die (mysqli_error());
								$result= mysqli_query($conn,"select * from shop order by id ASC" ) or die (mysqli_error());
								while ($row= mysqli_fetch_array ($result) ){
								$id=$row['id'];
								?>
								<tr>
								<td style="text-align:center; word-break:break-all; width:400px;"> <?php echo $row ['shop_no']; ?></td>
								<td style="text-align:center; word-break:break-all; width:350px;"> <?php echo $row ['floor_level']; ?></td>
								<td style="text-align:center; word-break:break-all; width:500px;"> <?php echo $row ['section']; ?></td>
								<!-- <td style="text-align:center; word-break:break-all; width:500px;"> <?php echo $row ['names']; ?></td> -->
								<td style="text-align:center; width:350px;">
									<a href="editshop.php<?php echo '?id='.$id; ?>" class="btn btn-info">Edit</a>
									 <a href="#delete<?php echo $id;?>"  data-toggle="modal"  class="btn btn-danger" >Delete </a>
								</td>
									
										<!-- Modal -->
								<div id="delete<?php  echo $id;?>" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
								<div class="modal-header">
								<h3 id="myModalLabel">Delete</h3>
								</div>
								<div class="modal-body">
								<p><div class="alert alert-danger">Are you Sure you want Delete?</p>
								</div>
								<hr>
								<div class="modal-footer">
								<button class="btn btn-inverse" data-dismiss="modal" aria-hidden="true">No</button>
								<a href="deleteShop.php<?php echo '?id='.$id; ?>" class="btn btn-danger">Yes</a>
								</div>
								</div>
								</div>
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