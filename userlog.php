<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MRIMS</title>
	<style>
	body {
		background-attachment: fixed;
		background-size: 100% 100%;
		}
	.container {
		 position: relative;
		}
	#nav {
		width: 15%;
		left:1%;
		top:22%;
		background:#AEDBE8;
		float: left;
		clear:left;
		height: auto;
		border-radius: 0px 60px 0px 60px;
		border: 1px solid #aaa;
		}
	#nav2 {
	width: 18%;
	right: 1%;
	top: 22%;
	float: right;
	clear: right;
	background-color: #DEDBD7;
		}
	#main {
		width: 60%;
		height:55%;
		overflow: auto;
		zoom: 1;
		margin-left: 18%;
		padding: 34px;
		}
	#header {
		top: 0;
		width: 99%;
		height: 28%;
		font-size:24px;
		color: #ffffff;
		background:#AEDBE8;
		border-radius: 10px 10px 0px 0px;
		border: 1px solid #aaa;
		text-align:center;
		}
	img {
		 margin: 0;
		}
	section {
		background:orange;
		color: white
		margin-bottom:5px;
		width: 99%;
	}
	.btn-default {
	  border: 0;
	  background: green;
	  padding: 11px 30px;
	  font-size: 17px;	  
	  color: #ffffff;
	}
	.btn-default:hover {
	  background: #77a198;
	  font-size: 22px;
	}
	a {
	font-size: 25px;
	text-decoration: none;
	color:#FF360D;
	}
	a:hover{
	font-size: 32px;
	color: red;
	}
	a:active{
	font-size: 32px;
	color: red;
	background:#ffffff;
	}
	.active{
	font-size: 40px;
	color: red;
	background:#ffffff;
	text-align:center;
	border-radius: 30px 0px 30px 0px;
	border: 1px solid #aaa;
	}
	ul{
	 list-style: none;
	}
	label{
	display:inline;
	color: blue;
	font-size: 30px;
	padding:10px;
	text-align:center;	
	}
	fieldset {
	  padding: .35em .625em .75em;
	  margin: 0 2px;
	  border: 1px solid #c0c0c0;
	  border-radius: 0px 40px 0px 40px;
	  text-align:center;
	}
	legend {
	  font-size: 20px;
	  color: red;
	  padding: 0;
	  border: 0;
	}
	.inputx{
	  height: 18px;
	  padding: 5px 10px;
	  font-size: 17px;
	  line-height: 1.5;
	  border-radius: 3px;
	  background-color: #c9302c;
	  border-color: #ac2925;
	  color: #ffffff;
	}
	input{
	border: 1px solid #c6c9cc;
	border-radius: 5px;
	color: #888;
	margin: 5px 0 27px 0;
	padding: 5px 8px;
	border-radius: 5px;
	font: 14px/1.4 "Helvetica Neue", Helvetica, Arial, sans-serif;  
	}
	input[type="reset"]{
	  font-size: 17px;
	  border-radius: 13px;
	  background-color: red;
	  border-color: red;
	  color: #ffffff;
	  width: auto;
	}
	button{
	background-color: buttonface;
	font-weight:bold;
	}
	#footer {
	position: fixed;
	bottom: 0;
	width: 99%;
	border-radius: 0px 0px 10px 10px;
	border: 1px solid #aaa;
	padding:5px 50px 5px 5px;
	text-align:center;
	overflow: auto;
		zoom: 1;
		}
	</style>
	
  </head>
  <body>
  <div class="container">
 <!-- <div id="header"><img src="images/header.png" alt="--"></div> -->
  <section><hr></section>
  <div id="nav">
  <ul>
  <li></li>
  <li><a href="index.php">Home</a></li>
  <li>.</li>
  <li><a href="about.php">About us</a></li>
  <li>.</li>
  <li><a href="contact.php">Contact Us </a></li>
  <li>.</li>
  <li>***********</li>
  <li>.</li>
  <li></li>
  <li><hr></li>
  <li class="active"><a href="userlog.php">Login</a></li>
  </ul>
  </div>
  <div id="main">
	<fieldset>
		<legend>Login details</legend>
			<form method="post" action="login_action.php">
				<p><label>Username: </label><input type="text" name="username" id="userf" required x-moz-errormessage="Enter Your Username"/></p>
				<p><label>Password: </label><input type="password" name="password" id="userf"  required x-moz-errormessage="Enter Your Password"/></p>
				<p>
				<input class="btn btn-default" type="reset" name="reset" value="Clear">
				<input class="btn btn-default" type="submit" name="login" value="Login"></p>
			</form>
	 </fieldset>
  </div>
  <div id="footer">
 A PROJECT BY ABDULRAHIM MASTER
  </div>
  </div>
  </body>
</html>
