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
  $query=mysqli_query($conn,"select * from shop where id='$ID'")or die(mysqli_error());
$row=mysqli_fetch_array($query);
  ?>
 <form class="form-horizontal" method="post"  enctype="multipart/form-data" style="float: right;">
                                <legend><h4>Edit</h4></legend>
                                
                                <hr>
								
                                <h4>Shop Information</h4>
                                <hr>
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Shop No.:</label>
                                    <div class="controls">
                                        <input type="text" name="fname" required value=<?php echo $row['shop_no']; ?>>
                                    </div>
                                </div>
											
								<div class="control-group">
                                    <label class="control-label" for="inputPassword">Floor level:</label>
                                    <div class="controls">
                                        <input type="text" name="mname" required value=<?php echo $row['floor_level']; ?>>
                                    </div>
                                </div>
                                <div class="control-group">
                                    <label class="control-label" for="inputEmail">Section:</label>
                                    <div class="controls">
                                        <input type="text" name="lname" required value=<?php echo $row['section']; ?>>
                                    </div>
                                </div>
                                
								 <div class="control-group">
                                    <div class="controls">

                                        <button type="submit" name="update" class="btn btn-success" style="margin-right: 65px;">Save</button>
										<a href="shop.php" class="btn">Back</a>
										  </div>
                                </div>
                            </form>
							
							
							<?php
							
							
							$id=$_REQUEST['id'];

$result = mysqli_query($conn,"SELECT * FROM shop WHERE id = '$id'");
$test = mysqli_fetch_array($result);
if (!$result) 
		{
		die("Error: Data not found..");
		}
		        
									$fname= $test['shop_no'];
									$mname= $test['floor_level'];
									$lname= $test['section'];
				
				
                            
if (isset($_POST['update'])) {
                               
									$fname_save= $_POST['fname'];
									$mname_save= $_POST['mname'];
									$lname_save= $_POST['lname'];
								
mysqli_query($conn,"UPDATE shop SET shop_no = '$fname_save' , floor_level = '$mname_save' , section ='$lname_save' WHERE id = '$id'") or die(mysqli_error()); 	
header("Location:shop.php");	

					
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
								