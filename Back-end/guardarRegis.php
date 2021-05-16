<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="UTF-8">
	<title>Guardar datos</title>
</head>

<body>
	<form action="./procesos/guardarRegistros.php" method="POST">
		<label>idRegistro</label><input type="text" name="idRegistro"><br><br>
		<label>tipoVacuna</label><input type="text" name="tipoVacuna"><br><br>
		<label>marcaVacuna</label><input type="text" name="marcaVacuna"><br><br>
		<label>tipoPaciente</label><input type="text" name="tipoPaciente"><br><br>
		<label>Fecha de aplicación</label><input type="email" name="fechaAplicacion"><br><br>
		<label>idUsuario</label><input type="text" name="Usuarios_idUsuario"><br><br>
		<input type="submit" value="Guardar">
	</form>
</body>

</html>