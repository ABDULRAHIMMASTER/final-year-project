<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>MRIMS</title>
	<style>
	body {
		background-image: url('images/b.png');
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
		border-radius: 20px;
		border: 1px solid #aaa;
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
		margin-bottom:5px;
		text-align:center;
		}
	img {
		 margin:0;
		}
	section {
		background:orange;
		color: white
		margin-bottom:5px;
		width: 99%;
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
	#footer {
	position: fixed;
	bottom: 0;
	width: 99%;
	border-radius: 0px 0px 10px 10px;
	border: 1px solid #aaa;
	padding:5px 50px 5px 5px;
	text-align:center;
		}
	</style>
	
  </head>
  <body>
  <div class="container">
  
  <section><hr></section>
  <div id="nav">
  <ul>
  <li ><a href="index.php">Home</a></li>
  <li>.</li>
  <li><a href="about.php">About us</a></li>
  <li>.</li>
  <li class="active"><a href="contact.php">Contact Us </a></li>
  <li>.</li>
  <li>***********</li>
  <li>.</li>
  <li></li>
  <li><hr></li>
  <li><a href="userlog.php">Login</a></li>
  </ul>
  </div>
  <div id="main">
    <h1 align="center"><B>CONTACT US</B></h1>
    <p>EMAIL: fatimabaika@gmail.com</p>
    <p>TEL:07065653438</p>
	
  </div>
  <div id="footer">
  a proj
  </div>
  </div>
  </body>
</html>