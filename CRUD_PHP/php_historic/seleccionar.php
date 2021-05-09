<?php
session_start();
if (!$_SESSION['verificar']) {
	header("Location: index.php");
}
echo $_SESSION['user'];
?>
<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>Leer o seleccionar datos de la base de datos</title>
</head>

<body>
	<table>
		<thead>
			<tr>
				<th>id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Actualizar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>
			<?php
			require_once "php/connect.php";
			$query = "SELECT * FROM Usuarios";
			$consulta1 = $mysqli->query($query);
			while ($fila = $consulta1->fetch_array(MYSQLI_ASSOC)) {
				echo "<tr>
						<td>" . $fila['idUsuario'] . "</td>
						<td>" . $fila['nombre'] . "</td>
						<td>" . $fila['apellido1'] . "</td>
						<td>" . $fila['apellido2'] . "</td>
						<td>" . $fila['email'] . "</td>
						<td>" . $fila['password'] . "</td>
						<td>" . $fila['tipoUsuario'] . "</td>
						<td>" . $fila['genero'] . "</td>
						<td>" . $fila['telefono'] . "</td>
						<td>" . $fila['edad'] . "</td>
						<td>" . $fila['estadoUsuario'] . "</td>
						<td><a href='actualizar.php?id=" . $fila['Id'] . "'>Actualizar</a></td>
						<td><a href='eliminar.php?id=" . $fila['Id'] . "'>Eliminar</a></td>
					</tr>";
			}
			?>
		</tbody>
	</table>
	<a href="logout.php">Cerrar sesion</a>
</body>

</html>