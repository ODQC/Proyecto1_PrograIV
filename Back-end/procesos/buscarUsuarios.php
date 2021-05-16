<?php
session_start();
?>
<?php


try {
	require_once "../php/connect.php";
	$query = "SELECT * FROM `RegistroCovid19`.`Usuarios`";
	$consulta3 = $mysqli->query($query);
	if ($consulta3->num_rows >= 1) {
		echo "<table>
			<thead>
				<tr>
					<th>Cedula</th>
					<th>Nombre</th>
					<th>Apellido1</th>
					<th>Apellido2</th>
					<th>Email</th>
					<th>tipoUsuario</th>
					<th>genero</th>
					<th>telefono</th>
					<th>edad</th>
					<th>Estado</th>
					<th>Actualizar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>";
		while ($fila = $consulta3->fetch_array(MYSQLI_ASSOC)) {
			echo "<tr>
					<td>" . $fila['idUsuario'] . "</td>
					<td>" . $fila['mombre'] . "</td>
					<td>" . $fila['apellido1'] . "</td>
					<td>" . $fila['apellido2'] . "</td>
					<td>" . $fila['email'] . "</td>
					<td>" . $fila['genero'] . "</td>
					<td>" . $fila['telefono'] . "</td>
					<td>" . $fila['edad'] . "</td>
					<td>" . $fila['estadoUsuario'] . "</td>
					<td><a href='#!'>Actualizar</a></td>
					<td><a href='#!'>Eliminar</a></td>
				</tr>";
		}
		echo "</tbody>
		</table>";
	} else {
		echo "No hemos encotrado ningun registro con la palabra " . $palabra;
	}
} catch (mysqli_sql_exception $e) {
	throw $e;
} catch (Exception $e) {
	echo 'Message: ' . $e->getMessage();
}
mysqli_close($conexion);
