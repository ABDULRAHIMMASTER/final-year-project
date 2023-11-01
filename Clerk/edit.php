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
  $query=mysqli_query($conn,"select * from tz_members where id='$ID'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
 <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                <h4>Image</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">
										<?php if($row['photo'] != ""): ?>
										<img src="../upload/<?php echo $row['photo']; ?>" width="100px" height="100px" style="border:1px solid #333333;">
										<?php else: ?>
										<img src="images/default.png" width="100px" height="100px" style="border:1px solid #333333;">
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
                                    <label class="control-label" for="inputPassword">Names:</label>
                                    <div class="controls">
                                        <input type="text" name="fname" required value=<?php echo $row['names']; ?>>
                                    </div>
                                </div>								
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Username:</label>
                                    <div class="controls">
                                        <input type="text" name="mname" required value=<?php echo $row['usr']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Password:</label>
                                    <div class="controls">
                                        <input type="text" name="lname" required value=<?php echo $row['pass']; ?>>
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
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="rgstvendor.php" class="btn">Back</a>
										<!--<button type="submit" name="update" onClick="history.go(-1);return true;">Back</button>-->
                                    </div>
                                </div>
                            </form>
							
<?php
$id=$_REQUEST['id'];
if (isset($_POST['image'])) {

//image
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];

move_uploaded_file($_FILES["image"]["tmp_name"],"../upload/" . $_FILES["image"]["name"]);			
$location=$_FILES["image"]["name"];

mysqli_query($conn," UPDATE tz_members SET photo='$location' WHERE id = '$id' ")or die(mysqli_error());
header('location:rgstvendor.php');
}
?>
							
							<?php
							
							
							$id=$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM tz_members WHERE id = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		        
									$fname= $test['names'];
									$mname= $test['usr'];
									$lname= $test['pass'];
									$address= $test['address'];
									$email= $test['email'];
				
				
                            
if (isset($_POST['update'])) {
                               
									$fname_save= $_POST['fname'];
									$mname_save= $_POST['mname'];
									$lname_save= $_POST['lname'];
									$address_save= $_POST['address'];
									$email_save= $_POST['email'];
								
mysqli_query($conn,"UPDATE tz_members SET names = '$fname_save' , usr = '$mname_save' , pass ='$lname_save',
address = '$address_save' , email ='$email_save' WHERE id = '$id'") or die(mysqli_error()); 	
echo' <meta content="3;rgstvendor.php" http-equiv="refresh" />';
//header("Location:index.php");	

					
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
								