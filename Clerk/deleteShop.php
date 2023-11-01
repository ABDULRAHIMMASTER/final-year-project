<?php 

include('db.php');

$get_id=$_GET['id'];

mysqli_query($conn,"delete from shop where id = '$get_id' ")or die(mysqli_error());
header('location:shop.php');
?>