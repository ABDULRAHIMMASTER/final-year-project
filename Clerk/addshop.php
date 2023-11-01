<?php
	include('db.php');
							{
							if (isset($_POST['Submit'])){
									$fname= $_POST['fname'];
									$mname= $_POST['usr'];
									$username =$_POST['pass'];

						mysqli_query($conn,"insert into shop (shop_no, floor_level, section) 
						values('$fname','$mname','$username')")or die(mysqli_error());
									
									}
										header('location:shop.php');
								}	
							
?>								