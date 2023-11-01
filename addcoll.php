<?php
	include('connect.php');
							{
							if (isset($_POST['Submit'])){
									$fname= $_POST['licence'];
									$mname= $_POST['receipt'];
									$username =$_POST['amount'];
									
						mysqli_query("UPDATE receipt SET active = '0'  WHERE receipt_no = '$mname'") or die(mysqli_error()); 	
						mysqli_query("insert into payment (id, licence_no, paid_amount, balance, receipt_no, dateofPay) 
						values('','$fname','$username','','$mname',Now())")or die(mysqli_error());
									
									}
										//header('location:receiptC.php');
						echo'<p> The data has been successfully Recorded . Thank you</p>'; 
						echo' <meta content="2;receipt.php" http-equiv="refresh" />';
								}	
							
?>								