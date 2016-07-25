<?php include('show/header.php');?>
<table class="table">
	<thead>
		<h4 class="relicsPlace ">ADD RELICS</h4>
		<tr>
			<td>Relics name</td>
			<td><input type='text' name='relicsname' required></td>
			<tr>
				<td>Address</td>
				<td><input type='text' name='address' required></td>
			</tr>
			<tr>
				<td>Cost</td>
				<td><input type='text' name='cost' required></td>
			</tr>
			<tr>
				<td>Time</td>
				<td><input type='text' name='time' required></td>
			</tr>
			<tr>
				<td>Capacity</td>
				<td><input type='text' name='capacity' required></td>
			</tr>
			<tr>
				<td>Note</td>
				<td><input type='text' name='note' required></td>
			</tr>
			
		</tr>
		
	</thead>
	<!-- <form action={{}} method='POST'>
			<tr>
				<tr><input type='text' name='relicsname' required></td>
			<tr><input type='text' name='address' required></td>
		<tr><input type='text' name='cost' required></td>
		<tr><input type='text' name='time' required></td>
		<td><input type='text' name='capacity' required></td>	
		<tr><input type='submit' value='Add'></tr>
	</tr>
</form> -->
</table>
<tr><div class="col-md-2"><input type='submit' value='Add'></div></tr>
<tr><div class="col-md-2"><input type='submit' value='Cancel'></div></tr>
<?php include('show/footer.php');?>