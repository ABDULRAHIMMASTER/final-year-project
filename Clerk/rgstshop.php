	    <!-- Button to trigger modal -->
    <a class="btn btn-primary" href="#myModal" data-toggle="modal">Register Shop</a>
	<br>
	<br>
	<br>
    <!-- Modal -->
    <div id="myModal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">

    <h3 id="myModalLabel">Add</h3>
    </div>
    <div class="modal-body">
	
					<form method="post" action="addshop.php"  enctype="multipart/form-data">
					<table class="table1">
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Shop No.:</label></td>
							<td width="30"></td>
							<td><input type="text" name="fname" placeholder="Shop No" required x-moz-errormessage="Enter Shop No"/></td>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Floor Level:</label></td>
							<td width="30"></td>
							<td>
							<select name="usr">
							<option value="1">I</option>
							<option value="2">II</option>
							<option value="3">III</option>
							</select>
						</tr>
						<tr>
							<td><label style="color:#3a87ad; font-size:18px;">Section:</label></td>
							<td width="30"></td>
							<td>
							<select name="pass">
							<option value="Western">Western</option>
							<option value="Eastern">Eastern</option>
							<option value="Southern">Southern</option>
							</select>
							</td>
						</tr>
						
					</table>
					
	
    </div>
    <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Close</button>
<button type="submit" name="Submit" class="btn btn-primary">Add</button>
    </div>
	

					</form>
    </div>			