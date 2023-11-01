<?php
require_once ('../auth.php');
//now, let's register our session variables
include ('db.php'); 
include ('header.php'); 
$ID=$_GET['id'];
?>
<body>


<div class="container">
<div class="hero-unit-header">
 <div class="container-con">
<!-- end banner & menunav -->

<div class="container">
<div class="row-fluid">
<div class="span12">
<div class="row-fluid">
<div class="span3"></div>
<div class="span6">


<div class="hero-unit-3">
<center>

<?php
  $query=mysqli_query($conn,"select * from payment where licence_no ='$ID'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
  
  <form method="post" action="addcoll.php"  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Vendor Licence No.:</label></td>
							<td width="30"></td>
							<td><input type="text" name="licence" required value=<?php echo $row['licence_no']; ?> readonly="readonly"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Receipt No.:</label></td>
							<td width="30"></td>
							<td><input type="text" name="receipt" placeholder="Receipt No" required x-moz-errormessage="Enter Vendor Receipt No" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;"> Amount Paid:</label></td>
							<td width="30"></td>
							<td><input type="text" name="amount" placeholder="Amount paid" required x-moz-errormessage="Enter Paid Amount " /></td>
						</tr>
						
					</table>
					<div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	</form>
	
								</center>
								</center>

								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
								</div>
</body>
</html>
								