<?php
// error_reporting(E_ALL ^ E_DEPRECATED);
// mysql_select_db('market',  mysql_connect('localhost','root',''))or die(mysql_error());
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "market";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);
// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}
// echo "Connected successfully";
?>