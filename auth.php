<?php
 error_reporting(E_ALL ^ E_DEPRECATED);
// Establishing Connection with Server by passing server_name, user_id and password as a parameter
// $connection = mysqli_connect("localhost", "root", "");
// // Selecting Database
// $db = mysqli_select_db("market", $connection);
 include("connect.php");
session_start();// Starting Session
// Storing Session
$user_check=$_SESSION['login_user'];
// SQL Query To Fetch Complete Information Of User
$ses_sql=mysqli_query($conn, "select * from tbl_user where user_name='$user_check'");
$row = mysqli_fetch_assoc($ses_sql);
$login_session =$row['names'];
$user_id = $row['id'];
if(!isset($login_session)){
mysql_close($connection); // Closing Connection
header('Location:../index.php'); // Redirecting To Home Page
}
?>