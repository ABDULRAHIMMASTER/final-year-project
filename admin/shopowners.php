<?php
require_once ('../auth.php');
//now, let's register our session variables
include('db.php');
include('header.php'); ?>
<style>
/*----- Tabs -----*/
.tabs {
    width:100%;
    display:inline-block;
}
 
    /*----- Tab Links -----*/
    /* Clearfix */
    .tab-links:after {
        display:block;
        clear:both;
        content:'';
    }
 
    .tab-links li {
        margin:0px 5px;
        float:left;
        list-style:none;
    }
 
        .tab-links a {
            padding:9px 15px;
            display:inline-block;
            border-radius:3px 3px 0px 0px;
            background:#7FB5DA;
            font-size:16px;
            font-weight:600;
            color:#4c4c4c;
            transition:all linear 0.15s;
        }
 
        .tab-links a:hover {
            background:#a7cce5;
            text-decoration:none;
        }
 
    li.active a, li.active a:hover {
        background:#fff;
        color:#4c4c4c;
    }
 
    /*----- Content of Tabs -----*/
    .tab-content {
        padding:15px;
        border-radius:3px;
        box-shadow:-1px 1px 1px rgba(0,0,0,0.15);
        background:#fff;
    }
 
        .tab {
            display:none;
        }
 
        .tab.active {
            display:block;
        }
</style>
<script>
jQuery(document).ready(function() {
    jQuery('.tabs .tab-links a').on('click', function(e)  {
        var currentAttrValue = jQuery(this).attr('href');
 
        // Show/Hide Tabs
        jQuery('.tabs ' + currentAttrValue).show().siblings().hide();
 
        // Change/remove current tab to active
        jQuery(this).parent('li').addClass('active').siblings().removeClass('active');
 
        e.preventDefault();
    });
});
</script>
 <body>
   <div class="row-fluid">
	<div class="alert alert-info">
	<!-- <button type="button" class="close" data-dismiss="alert">&times;</button> -->
          ">
  <hr>
	</div>
	
    <div class="alert alert-info"> 
        <ul>
		  <li><a href="home.php">Home</a></li>
		  <li><a href="rgstvendor.php">Register Vendor</a></li>		  	  
		  <li><a href="receipt.php"> Verify Receipts</a></li>
		  <li ><a href="Charge.php"> Check Charge</a></li>
		  <li class="active"><a href="rgstvendor.php">Register Shop owners</a></li>
		<li>
				<strong>&nbsp;<a href="logout.php" class="btn btn-danger lgout">Logout</a></strong></li>
			</ul>
        </div>
        <div class="span12">     
            <div class="container">
					<div class="tabs">
    <ul class="tab-links">
        <li ><a href="#tab1">Register Shop</a></li>
        <li><a href="#tab2">Shop owners</a></li>
        <li class="active"><a href="#tab3">Register Receipt details</a></li>
		<li><a href="#tab4">Register License details</a></li>
    </ul>
 
    <div class="tab-content">
        <div id="tab1" class="tab">
            <p><h2>Shop Details</h2></p>
            <p>
					<?php
			 error_reporting(E_ALL ^ E_DEPRECATED);
				if(isset($_POST['Submit']))
				{
				
				$emp_sps =$_POST['shop'];
				$emp_ows = $_POST['floor'];				
				$emp_owx = $_POST['wing'];
				
				$sql = "INSERT INTO shop(shop_no, floor_level, section) VALUES($emp_sps,$emp_ows,$emp_owx)";
				
				$retval = mysqli_query($conn, $sql);
				if(! $retval )
				{
				  die('Could not enter data: ' . mysqli_error());
				}
				echo "Data Successfully Recorded\n";
				echo' <meta content="6;shopowners.php" http-equiv="refresh" />';
				//header("location: shopowners.php");
				mysqli_close($conn);
				}
				else
				{
				?>
					<form method="post" action=""  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Shop No.:</label></td>
							<td width="30"></td>
							<td><input type="text" name="shop" placeholder="Shop No" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Floor Level:</label></td>
							<td width="30"></td>
							<td>
							<select name="floor">
							<option>1</option>
							<option>2 </option>
							<option>3</option>
							</select>
							</td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Section Wing:</label></td>
							<td width="30"></td>
							<td>
							<select name="wing">
							<option value="Western">Western</option>
							<option value="Eastern">Eastern </option>
							<option value="Southern">Southern</option>
							</select>
							</td>
						</tr>
						
					</table>
				
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button type="submit" name="Submit" class="btn btn-primary">Add</button>
				</div>
					</form>
						<?php
						}
						?>
						</p>
        </div>
 
        <div id="tab2" class="tab">
        
			<p><h2>Shop Owner Details</h2></p>
            <p>
			<?php
			 error_reporting(E_ALL ^ E_DEPRECATED);
				if(isset($_POST['save']))
				{
				// $dbhost = 'localhost';
				// $dbuser = 'root';
				// $dbpass = '';
				// $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
				// if(! $conn )
				// {
				//   die('Could not connect: ' . mysqli_error());
				// }

				// if(! get_magic_quotes_gpc() )
				// {
				// $emp_sp = addslashes ($_POST['sno']);
				// $emp_ow = addslashes ( $_POST['owner']);
			
				// }
				// else
				// {
				$emp_sp =$_POST['sno'];
				$emp_ow = $_POST['owner'];
				// }
				
				$sql = "INSERT INTO tz_member_shops(shop_no, tz_members_id) VALUES($emp_sp,$emp_ow)";
				
				$retval = mysqli_query($conn, $sql);
				if(! $retval )
				{
				  die('Could not enter data: ' . mysqli_error());
				}
				echo "Data Successfully Recorded\n";
				echo' <meta content="6;shopowners.php" http-equiv="refresh" />';
				//header("location: shopowners.php");
				mysqli_close($conn);
				}
				else
				{
				?>
					<form method="post" action=""  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Shop No.:</label></td>
							<td width="30"></td>
							<td><input type="text" name="sno" placeholder="Shop No" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Shop Owner:</label></td>
							<td width="30"> 
							<?php
							error_reporting(E_ALL ^ E_DEPRECATED);
								// $con = mysqli_connect("localhost","root","");
								//  $db = mysqli_select_db("market",$con);
								 $gets=mysqli_query($conn,"SELECT * FROM tz_members ORDER BY id ASC");
								$options = '';
								 while($row = mysqli_fetch_assoc($gets))
								{
								  $options .= '<option value = "'.$row['id'].'">'.$row['names'].'</option>';
								}
								?>
							</td>
							<td>
							<select name="owner">
							<?php echo $options; ?>
							</select>
							</td>
						</tr>
						
					</table>
				
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button type="submit" name="save" class="btn btn-primary">Add</button>
				</div>
					</form>
					<?php
						}
						?>
						</p>
		</div>
 
        <div id="tab3" class="tab active">
				<p><h2>Add Receipt Details</h2></p>
            <p>
			<?php 

				function createRandomPassword() {
					$chars = "123456789012345678901234567891234567891234567891234567890";
					srand((double)microtime()*1000000);
					$i = 0;
					$pass = '' ;
					while ($i <= 5) {
						$num = rand() % 33;
						$tmp = substr($chars, $num, 1);
						$pass = $pass . $tmp;
						$i++;
					}
					return $pass;
				}
				// Usage
				$password = createRandomPassword();

			 error_reporting(E_ALL ^ E_DEPRECATED);
				if(isset($_POST['savea']))
				{
				// $dbhost = 'localhost';
				// $dbuser = 'root';
				// $dbpass = 'root';
				// $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
				// if(! $conn )
				// {
				//   die('Could not connect: ' . mysqli_error());
				// }

				// if(! get_magic_quotes_gpc() )
				// {
				// $emp_spX = addslashes ($_POST['rdno']);
			
				// }
				// else
				// {
				$emp_sp =$_POST['rdno'];
				// }
				$sql = "INSERT INTO receipt(receipt_no, active) VALUES($emp_sp,'1')";
				// ;
				$retval = mysqli_query($conn, $sql);
				if(! $retval )
				{
				  die('Could not enter data: ' . mysqli_error());
				}
				echo "Data Successfully Recorded\n";
				echo' <meta content="6;shopowners.php" http-equiv="refresh" />';
				//header("location: shopowners.php");
				mysqli_close($conn);
				}
				else
				{
				?>
					<form method="post" action=""  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;"></label></td>
							<td width="30"></td>
							<td>
								<table width="247" height="38" align="center">
								   <tr>
									 
									 <td width="236"><div align="center" class="style10">
									  <!-- <h3>
										 <?php
										 /*
								if (isset($_POST['submitBtn'])){ 
								 echo '<table><tr><td>'; 
							echo '<font clolor=red>'.createRandomPassword().'</font'; 
								 echo '</td></tr></table>'; 
								 } 
								 */
								?>
										 </h3>
										 -->
									 </div></td>
									 <td width="130"><table align="center">
									   <tr>
										 <td class="style10" >
										 <!-- <input type="submit" name="submitBtn" value="Generate" /> -->										 
										 </td>
									   </tr>
									 </table></td>
								   </tr>
								 </table>
							
							</td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Receipt No.:</label></td>
							<td width="30"></td>
							<td><input type="text" name="rdno" value="<?php echo createRandomPassword();?>" /></td>
						</tr>
					</table>
				
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button type="submit" name="savea" class="btn btn-primary">Add</button>
				</div>
					</form>
					<?php
						}
						?>
						</p>
			
		</div>
		<div id="tab4" class="tab">
        
			<p><h2>Register License Details</h2></p>
            <p>
			<?php
			 error_reporting(E_ALL ^ E_DEPRECATED);
				if(isset($_POST['savel']))
				{
				// $dbhost = 'localhost';
				// $dbuser = 'root';
				// $dbpass = '';
				// $conn = mysqli_connect($dbhost, $dbuser, $dbpass);
				// if(! $conn )
				// {
				//   die('Could not connect: ' . mysqli_error());
				// }

				// if(! get_magic_quotes_gpc() )
				// {
				// $emp_lc = addslashes ($_POST['licence_no']);
				// $emp_amt = addslashes ( $_POST['amount']);
				// $emp_bs = addslashes ($_POST['Business']);
				// $emp_sp = addslashes ($_POST['sno']);
				// $emp_ow =  addslashes ($_POST['todays_date']);
				// }
				// else
				// {
				$emp_lc =$_POST['licence_no'];
				$emp_amt = $_POST['amount'];
				$emp_bs =$_POST['Business'];
				$emp_sp =$_POST['sno'];
				$emp_ow = date($_POST['todays_date']);
				$emp_da = date("Y-m-d");
				$emp_prd = date("Ymd");
				// }
				
				$sql = "INSERT INTO licence(licence_no, amount, business_type,dateRegitered, ExpiryDate, period, shop_no) VALUES($emp_lc,$emp_amt,$emp_bs,date('Y-m-d'),$emp_ow,$emp_prd,$emp_sp)";
				// ;
				$retval = mysqli_query($conn, $sql);
				if(! $retval )
				{
				  die('Could not enter data: ' . mysqli_error());
				}
				echo "Data Successfully Recorded\n";
				echo' <meta content="6;shopowners.php" http-equiv="refresh" />';
				//header("location: shopowners.php");
				mysqli_close($conn);
				}
				else
				{
				?>
					<form method="post" action=""  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Licence No.:</label></td>
							<td width="30"></td>
							<td><input type="text" name="licence_no" placeholder="Licence No" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Amount:</label></td>
							<td width="30"></td>
							<td><input type="text" name="amount" placeholder="License Amount" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Business Type:</label></td>
							<td width="30"></td>
							<td><input type="text" name="Business" placeholder="Business Type" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Shop No.:</label></td>
							<td width="30"></td>
							<td><input type="text" name="sno" placeholder="Shop No" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">License Expiry Date :</label></td>
							<td width="30"></td>
							<td><input name="todays_date" onfocus="showCalendarControl(this);" type="text" placeholder="License Expiry Date" required ></td>
						</tr>
					</table>
				
				<div class="modal-footer">
				<button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
			<button type="submit" name="savel" class="btn btn-primary">Add</button>
				</div>
					</form>
					<?php
						}
						?>
						</p>
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