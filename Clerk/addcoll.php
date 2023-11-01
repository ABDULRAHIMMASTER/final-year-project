<?php
	include('db.php');
							{
							if (isset($_POST['Submit'])){
									$fname= $_POST['licence'];
									$mname= $_POST['receipt'];
									$username =$_POST['amount'];
									
						mysqli_query($conn,"UPDATE receipt SET active = '0'  WHERE receipt_no = '$mname'") or die(mysqli_error()); 	
						mysqli_query($conn,"insert into payment (licence_no, paid_amount, balance, receipt_no, dateofPay) 
						values('$fname','$username','0.00','$mname',Now())")or die(mysqli_error());
									
									}
										//header('location:receiptC.php');
						echo'<p> The data has been successfully Recorded . Thank you</p>'; 
						echo' <meta content="2;receiptC.php" http-equiv="refresh" />';
								}	
							
?>								