<?php
require_once ('../auth.php');
//now, let's register our session variables
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MRIMS</title>
	<link rel="stylesheet" href="css/main.css">
	
	
  </head>
  <body>
  <div class="container">
 <br/>
  <section><hr></section>
  <div id="nav">
  <ul><br>
  <li class="active"><a href="home.php">Home</a></li>
	<br>
  <br><br><br><br>
  <li>
  <br>
  <br>
  <li><hr></li>
  <li ><a href="logout.php">Logout</a></li>
  </ul>
  </div>
  <div id="main">
	<fieldset>
		<legend>Welcome <?php echo $login_session; ?></legend>
			<div id="navcn">
				<p><button class="btn"name="account" onclick="window.location.href='rgstvendor.php'"> Register Vendor</button></p>
				<p><button class="btn"name="account" onclick="window.location.href='shop.php'"> Register Shop</button></p>
			</div>
			<div id="navcc">
				<p><button class="btn"name="account" onclick="window.location.href='Charge.php'"> Check Charge</button></p>
				<p><button class="btn"name="account" onclick="window.location.href='receiptC.php'">Register Collections</button></p>
				<p><button class="btn"name="account" onclick="window.location.href='receiptC.php'"> Update Vendor Payments</button></p>
			</div>

	 </fieldset>
  </div>
  
  <div id="footer">
  a proj
  </div>
  </div>
  </body>
</html>