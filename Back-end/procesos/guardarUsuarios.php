<?php
session_start();
?>
<?php

try {
	require_once "../php/connect.php";
	$idUsuario = $_POST['idUsuario'];
	$nombre = $_POST['nombre'];
	$apellido1 = $_POST['apellido1'];
	$apellido2 = $_POST['apellido2'];
	$email = $_POST['email'];
	$contrasenia = md5($_POST['contrasenia']);
	$tipoUsuario = $_POST['tipoUsuario'];
	$genero = $_POST['genero'];
	$telefono = $_POST['telefono'];
	$edad = $_POST['edad'];
	$estadoUsuario = $_POST['estadoUsuario'];

	$query = "INSERT INTO `RegistroCovid19`.`Usuarios`
		(`idUsuario`, `nombre`, `apellido1`, `apellido2`, `email`, `contrasenia`, `tipoUsuario`, `genero`, `telefono`, `edad`,`estadoUsuario` ) 
		VALUES ('$idUsuario', '$nombre', '$apellido1', '$apellido2', '$email', md5('$contrasenia'), '$tipoUsuario', '$genero', '$telefono', '$edad', '$estadoUsuario');";
	if ($mysqli->query($query)) {

		echo '<script type="text/JavaScript"> 
						alert("EL usuario se guardó correctamente");
					</script>';
	} else {
		echo '<script type="text/JavaScript"> 
							alert("No se puedo guardar el usuario correctamente");
						</script>';
	}
	
} catch (mysqli_sql_exception $e) {
	throw $e;
} catch (Exception $e) {
	echo 'Message: ' . $e->getMessage();
}
mysqli_close($conexion);


