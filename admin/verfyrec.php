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
<?php 
error_reporting(E_ERROR);
include ('db.php'); 
include ('header.php'); 
$ID=$_GET['id'];						
$id=$_REQUEST['id'];								
mysqli_query($conn,"UPDATE receipt SET active = '2'  WHERE receipt_no = '$id'") or die(mysqli_error()); 	
//header("Location:rgstvendor.php");
echo'<p> The Receipt has been verified. Thank you</p>'; 
echo' <meta content="2;receipt.php" http-equiv="refresh" />';	
		?>
 
  </div>
  </body>
</html>
								