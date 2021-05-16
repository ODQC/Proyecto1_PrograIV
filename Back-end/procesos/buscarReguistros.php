<?php
session_start();
?>
<?php


try {
	require_once "../php/connect.php";
	$query = "SELECT * FROM `RegistroCovid19`.`Registro_Vacunados`";
	$consulta3 = $mysqli->query($query);
	if ($consulta3->num_rows >= 1) {
		echo "<table>
			<thead>
				<tr>
					<th>Registro</th>
					<th>Tipo Vacuna</th>
					<th>Marca Vacuna</th>
					<th>Tipo Paciente</th>
					<th>Fecha aplicación</th>
					<th>idUsuario</th>
					<th>Actualizar</th>
					<th>Eliminar</th>
				</tr>
			</thead>
			<tbody>";
		while ($fila = $consulta3->fetch_array(MYSQLI_ASSOC)) {
			echo "<tr>
					<td>" . $fila['idRegistro'] . "</td>
					<td>" . $fila['tipoVacuna'] . "</td>
					<td>" . $fila['marcaVacuna'] . "</td>
					<td>" . $fila['tipoPaciente'] . "</td>
					<td>" . $fila['fechaAplicacion'] . "</td>
					<td>" . $fila['Usuarios_idUsuario'] . "</td>
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
