<?php
	$idUsuario=$_POST['cedula'];
	$query="SELECT * FROM RegistroCovid19.Usuarios WHERE idUsuario LIKE '%$idUsuario%'";
	$consulta3=$mysqli->query($query);
	
	if($consulta3->num_rows>=1){
		echo "<table>
		<thead>
			<tr>
				<th>idUsuario</th>
				<th>nombre</th>
				<th>apellido1</th>
				<th>apellido2</th>
				<th>email</th>
				<th>password</th>
				<th>tipoUsuario</th>
				<th>genero</th>
				<th>telefono</th>
				<th>edad</th>
				<th>estadoUsuario</th>
				<th>Actualizar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>";
		while($fila=$consulta3->fetch_array(MYSQLI_ASSOC)){
			echo "<tr>
				<td>".$fila['idUsuario']."</td>
				<td>".$fila['nombre']."</td>
				<td>".$fila['apellido1']."</td>
				<td>" . $fila['apellido2']."</td>
				<td>".$fila['email']."</td>
				<td>" .$fila['password']."</td>
				<td>" .$fila['tipoUsuario']."</td>
				<td>" .$fila['genero']."</td>
				<td>" .$fila['telefono']."</td>
				<td>" .$fila['edad']. "</td>
				<td>" .$fila['estadoUsuario'] . "</td>
				<td><a href='#!'>Actualizar</a></td>
				<td><a href='#!'>Eliminar</a></td>
			</tr>";
		}
		echo "</tbody>
	</table>";
	}else{
		echo "No hemos encotrado ningun registro con la palabra ".$palabra;
	}