<?php
include("connect.php"); 
$tbl_name="tbl_user"; // Table name 
$tbl_namex="tz_members"; // Table name 

$username=$_POST['username']; // username sent from form 
$password=md5($_POST['password']); // password sent from form 

// To protect MySQL injection 
// $username = stripslashes($username);
// $password = stripslashes($password);
// $username = mysql_real_escape_string($username);
// $password = mysql_real_escape_string($password);

//Query
$sql="SELECT * FROM tbl_user WHERE user_name='$username' and password='$password'";
// $sqlx="SELECT * FROM $tbl_namex WHERE usr='$username' and pass='$password'";
$result=mysqli_query($conn, $sql);
// $resultx=mysqli_query($conn, $sqlx);
// Mysql_num_row is counting table row
$rows = mysqli_fetch_assoc($result);
// $rowsx = mysqli_fetch_assoc($resultx);
$user_id= $rows['id'];
// $user_ids= $rowsx['id'];
//Direct pages with different user levels
if ($rows['user_type'] == 'Clerk') {
	session_start();
	/*
	header('location: clerk/home.php'); //User1 
	session_register("username");
	session_register("password");
	*/
	$_SESSION['login_user']=$username;
	$_SESSION['user_id']=$user_id;
	echo'  <meta content="1;admin/" http-equiv="refresh" />';
	
}
else
if ($rows['user_type'] == 'Revenue Collector') {
	session_start();
	/*
	header('location: admin/home.php'); //User2 
	session_register("username");
	session_register("password"); 
	*/
	$_SESSION['login_user']=$username;
	$_SESSION['user_id']=$user_id;
	echo'  <meta content="2;clerk/" http-equiv="refresh" />';
	
} 
else
if ($rowsx['vendor_type'] == 'Vendor') {
	session_start();
	$_SESSION['login_user']=$username;
	$_SESSION['user_id']=$user_ids;
	echo'  <meta content="2;vendorhome.php" http-equiv="refresh" />';
}
else
{ 
	// Error login
echo "<script>alert('Access Denied!,Username or Password is INCORRECT Check with your Administrator');
						window.location='index.php';
						</script>";
}

?>