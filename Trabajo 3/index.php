<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Proyecto web</title>
</head>
<body>
	<form method="POST" action="app/test-file.php">
		<label>
			Name
		</label><br>
		<input type="text" name="name"><br>
		<label>
			Lastname
		</label><br>
		<input type="text" name="apellido"><br>
		<label>
			Hombre
		</label><br>
		<input type="radio" name="gerder" value="H"><br>
		<label>
			Hombre
		</label><br>
		<input type="radio" name="gerder" value="M"><br>

		<label>
			Preferencias: 
		</label><br>
		guitarra
		<input type="checkbox" name="preferencia[]" value="guitarra"><br>
		bateria
		<input type="checkbox" name="preferencia[]" value="bateria"><br>
		bajo
		<input type="checkbox" name="preferencia[]" value="bajo"><br>
		<label>
			Ciudad:
		</label><br>
		<select name="city">
			<option>
				La paz
			</option>
			<option>
				Los cabos
			</option>
		</select>
		contraseña
		<input type="password" name="password">
		<button type="sumbit">
			Guardar informacion
		</button><br>
	</form>
</body>
</html>