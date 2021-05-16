<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="UTF-8">
	<title>Guardar datos</title>
</head>

<body>
	<form action="./procesos/guardarUsuarios.php" method="POST">
		<label>idUsuario</label><input type="text" name="idUsuario"><br><br>
		<label>Nombre</label><input type="text" name="nombre"><br><br>
		<label>Apellido1</label><input type="text" name="apellido1"><br><br>
		<label>Apellido2</label><input type="text" name="apellido2"><br><br>
		<label>Email</label><input type="email" name="email"><br><br>
		<label>Clave</label><input type="password" name="contrasenia"><br><br>
		<label>Tipo de Usuario</label><input type="text" name="tipoUsuario"><br><br>
		<label>Genero</label><input type="text" name="genero"><br><br>
		<label>Telefono</label><input type="text" name="telefono"><br><br>
		<label>Edad</label><input type="text" name="edad"><br><br>
		<label>estadoUsuario</label><input type="text" name="estadoUsuario"><br><br>
		<input type="submit" value="Guardar">
	</form>
</body>

</html>