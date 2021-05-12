<?php
	$idsuario=$_POST['IdUsuario'];
	$query="SELECT * FROM RegistroCovid19.Registro_Vacunados WHERE Usuarios_idUsuario LIKE '%$idsuario%'";
	$consulta3=$mysqli->query($query);
	
	if($consulta3->num_rows>=1){
		echo "<table>
		<thead>
			<tr>
				<th>id</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>2
				<th>Actualizar</th>
				<th>Eliminar</th>
			</tr>
		</thead>
		<tbody>";
		while($fila=$consulta3->fetch_array(MYSQLI_ASSOC)){
			echo "<tr>
				<td>".$fila['Id']."</td>
				<td>".$fila['Nombre']."</td>
				<td>".$fila['Apellido']."</td>
				<td>".$fila['Email']."</td>
				<td><a href='#!'>Actualizar</a></td>
				<td><a href='#!'>Eliminar</a></td>
			</tr>";
		}
		echo "</tbody>
	</table>";
	}else{
		echo "No hemos encotrado ningun registro con la palabra ".$palabra;
	}