<?php
require_once ('authv.php');
//now, let's register our session variables
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>RGMS::You are welcome <?php echo $login_session; ?></title>
	<link rel="stylesheet" href="css/main.css">
  </head>
  <body>
  <div class="container">
  <div id="header"><img src="images/header.png" alt="--"></div>
  <section><hr></section>
  <div id="nav">
  <ul>
  <li  class="active"><a href="vendorhome.php">Home</a></li>
  <li>.</li>
  <br>
  <li>.</li>
 <br>
  <li>.</li>
  <li>***********</li>
  <li>.</li>
  <li></li>
  <li><hr></li>
  <li><a href="logout.php">Logout</a></li>
  </ul>
  </div>
  <div id="main">
    <h1>You are welcome <?php echo $login_session; ?></h1>
    <p>
	<fieldset>
		<legend><?php echo $login_session; ?> -- Please Choose your task</legend>
			<div id="navcn">
				<p><button class="btn"name="account" onclick="window.location.href='profile.php'"> Update Account</button></p>
				<p><button class="btn"name="account" onclick="window.location.href='vendor.php'"> Check Notifications</button></p>
			</div>
			<div id="navcc">
				<p><button class="btn"name="account" onclick="window.location.href='receipt.php'"> Register Receipt details</button></p>
			</div>

	 </fieldset></p>
  </div>
  <div id="footer">
  a proj
  </div>
  </div>
  </body>
</html>