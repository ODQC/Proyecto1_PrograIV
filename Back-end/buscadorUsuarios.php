<!DOCTYPE html>
<html lang="es">

<head>

	<meta charset="UTF-8">
	<title>Buscador</title>
</head>

<body>
	<form action="buscador.php" method="POST" autocomplete="off">
		
		<input name="buscar" type="submit" value="Buscar">
	</form>
	<?php
	if (isset($_POST['buscar'])) {
		require_once "php/connect.php";
		require_once "procesos/buscarUsuarios.php";
	}
	?>
</body>

</html>