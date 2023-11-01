	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Register Vendor</a>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="add.php"  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Names:</label></td>
							<td width="30"></td>
							<td><input type="text" name="fname" placeholder="Vendors Name" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Username:</label></td>
							<td width="30"></td>
							<td><input type="text" name="usr" placeholder="Username" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Password:</label></td>
							<td width="30"></td>
							<td><input type="text" name="pass" placeholder="***************" required /></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Gender</label></td>
							<td width="30"></td>
							<td><select name="Gender" id="Gender">
							  <option selected="selected">Male</option>
							  <option>Female</option>
							  </select>
							</td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Address</label></td>
							<td width="30"></td>
							<td><input type="text" name="address" placeholder="Address" required x-moz-errormessage="Enter your address"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Email</label></td>
							<td width="30"></td>
							<td><input type="email" name="email" placeholder="Email" required x-moz-errormessage="Enter a valid emai address"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Image</label></td>
							<td width="30"></td>
							<td><input type="file" name="image" required /></td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			