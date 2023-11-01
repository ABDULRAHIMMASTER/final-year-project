	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Register Market Collections</a>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="addcoll.php"  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Vendor Licence No.:</label></td>
							<td width="30"></td>
							<td><input type="text" name="licence" placeholder="Vendor Licence No" required x-moz-errormessage="Enter Vendor Licence No" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Receipt No.:</label></td>
							<td width="30"></td>
							<td><input type="text" name="receipt" placeholder="Receipt No" required x-moz-errormessage="Enter Vendor Receipt No" /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;"> Amount Paid:</label></td>
							<td width="30"></td>
							<td><input type="text" name="amount" placeholder="Amount paid" required x-moz-errormessage="Enter Paid Amount " /></td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			