<!DOCTYPE html>
<html>
<head>
	<title>Item</title>
</head>
<body>
	<table>
		<form method="POST" action="/item">
			{{ csrf_field() }}
			<tr>
				<td>Name</td>
				<td><input type="text" name="name"></td>
			</tr>
			<tr>
				<td>Price</td>
				<td><input type="number" name="price"></td>
			</tr>
			<tr>
				<td><input type="submit" name=""></td>
				<td><input type="reset" name=""></td>
			</tr>
		</form>	
	</table>
	<br><br>
	<table border="1">
		<tr>
			<th>No</th>
			<th>Name</th>
			<th>Price</th>
			<th>Action</th>
		</tr>
		<tr>
			{{ items }}
		</tr>
		
	</table>
</body>
</html>