<!DOCTYPE html>
<html>
<head>
	<title>Formulaire des coordonnées</title>
</head>
<body>
	
	<form method ='post' action = "/insert">
		<table>
			<tr>
			{{ csrf_field() }}
				<td>
					<strong>Raison social : </strong>
				</td>
				<td>
					<input type="text" name="raison_social">
				</td>
			</tr>
			<tr>
				<td>
					<strong>Adress : </strong>
				</td>
				<td>
					<input type="text" name="Adress">
				</td>
			</tr>
			<tr>
				<td>
					<strong>Telephone  : </strong>
				</td>
				<td>
					<input type="text" name="telephone">
				</td>
			</tr>
			<tr>
				<td>
					<strong>Site web : </strong>
				</td>
				<td>
					<input type="text" name="site_web">
				</td>
			</tr>
			
			<tr>
				<td>
					<strong>Pays : </strong>
				</td>
				<td>
					<input type="text" name="pays">
				</td>
			</tr>
			<tr>
				<td>
					<strong>Ville : </strong>
				</td>
				<td>
					<input type="text" name="ville">
				</td>
			</tr>
			<tr><td><input type="submit" name="submit" value="Valider"></td></tr>
		</table>
	</form>
</body>
</html>