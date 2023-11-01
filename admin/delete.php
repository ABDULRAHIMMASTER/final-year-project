<?php 

include('db.php');

$get_id=$_GET['id'];

mysqli_query($conn,"delete from tz_members where id = '$get_id' ")or die(mysqli_error());
header('location:rgstvendor.php');
?>