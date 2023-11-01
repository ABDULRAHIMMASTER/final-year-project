<?php
require_once ('authv.php');
//now, let's register our session variables 
include ('connect.php'); 
include ('header.php'); 
$ID=$_GET['id'];
?>
<body>

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
  $query=mysqli_query("select * from tz_members inner join tz_member_shops on tz_members.id=tz_member_shops.tz_members_id where usr = '$user_n'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
 <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Photo</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">
										<?php if($row['photo'] != ""): ?>
										<img src="upload/<?php echo $row['photo']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
										<?php else: ?>
										<img src="images/userpic.png" width="100px" height="100px" style="border:1px solid #333333;">
										<?php endif; ?>
									</label>
                                    <div class="controls">
                                        <input type="file" name="image" style="margin-left:27px;">
										<button type="submit" name="image" class="btn btn-success" style="margin-top: 20px; margin-right: 131px;">Update</button>
                                    </div>
                                </div>
                                <hr>
                                <h4>Personal Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputname">Names:</label>
                                    <div class="controls">
                                        <input type="text" name="fname" required value=<?php echo $row['names']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Address:</label>
                                    <div class="controls">
                                        <input type="text" name="address" required value=<?php echo $row['address']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputPassword">Email:</label>
                                    <div class="controls">
                                        <input type="email" name="email" required value=<?php echo $row['email']; ?>>
                                    </div>
                                </div>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">New Password:</label>
                                    <div class="controls">
                                        <input type="password" name="pass" >
                                    </div>
                                </div>
								
								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<!-- <button type="reset" name="update" onClick="history.go(-1);return true;" onclick="window.history.back();>Back</button> 
										<button onclick="window.location.href='profile.php'"><< Go Back</button>-->
                                    </div>
                                </div>
                            </form>
							
<?php
error_reporting(E_ERROR);
$id=$_REQUEST['id'];
if (isset($_POST['update'])) {

//image
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];

move_uploaded_file($_FILES["image"]["tmp_name"],"upload/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];

mysqli_query(" UPDATE tz_members SET photo='$location' WHERE id = '$user_id' ")or die(mysqli_error());

$result = mysqli_query("select * from tz_members inner join tz_member_shops on tz_members.id=tz_member_shops.tz_members_id where usr = '$user_n'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		        
									$fname= $test['names'];
									$address= $test['address'];
									$email= $test['email'];			
                            
if (isset($_POST['update'])) {
                               
									$fname_save= $_POST['fname'];
									$address_save= $_POST['address'];
									$email_save= $_POST['email'];
									$pass_save= md5($_POST['pass']);
mysqli_query("UPDATE tz_members SET names = '$fname_save',
address = '$address_save' , email ='$email_save',pass='$pass_save' WHERE id = '$user_id'") or die(mysqli_error()); 	
echo'  <meta content="2;profile.php" http-equiv="refresh" />';
//header("Location:profile.php");	
}
					
								}
								?>
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
								