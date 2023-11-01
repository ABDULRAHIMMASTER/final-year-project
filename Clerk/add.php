<?php
	include('db.php');
							
							if (!isset($_FILES['image']['tmp_name'])) {
							echo "";
							}else{
							$file=$_FILES['image']['tmp_name'];
							$image = $_FILES["image"] ["name"];
							$image_name= addslashes($_FILES['image']['name']);
							$size = $_FILES["image"] ["size"];
							$error = $_FILES["image"] ["error"];

							if ($error > 0){
										die("Error uploading file! Code $error.");
									}else{
										if($size > 10000000) //conditions for the file
										{
										die("Format is not allowed or file size is too big!");
										}
										
									else
										{

									move_uploaded_file($_FILES["image"]["tmp_name"],"../upload/" . $_FILES["image"]["name"]);			
									$location=$_FILES["image"]["name"];
									$fname= $_POST['fname'];
									$mname= $_POST['mname'];
									$pass= md5($_POST['pass']);
									$sex= $_POST['Gender'];
									$address= $_POST['address'];
									$email= $_POST['email'];
									$username =$_POST['usr'];

						mysqli_query($conn,"insert into tz_members (id, usr, pass, email, gender, dt, vendor_type, names, photo, address) 
						values('','$username','$pass','$email','$sex',CURDATE(),'Vendor','$fname','$location','$address')")or die(mysqli_error());
									
									}
										header('location:rgstvendor.php');
									}
							}
?>								