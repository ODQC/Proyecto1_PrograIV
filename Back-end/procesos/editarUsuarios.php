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

	$query = "UPDATE `RegistroCovid19`.`Usuarios` SET `email` = '$email', `tipoUsuario` = '$tipoUsuario', `genero` = '$genero', `telefono` = '$telefono', `edad` = '$edad' WHERE (`idUsuario` = '$idUsuario');";
	if ($mysqli->query($query)) {
		echo '<script type="text/JavaScript"> 
						alert("Datos actualizados");
					</script>';
	} else {

		echo '<script type="text/JavaScript"> 
							alert("Error no se pudo actualizar los datos");
						</script>';
	}
} catch (mysqli_sql_exception $e) {
	throw $e;
} catch (Exception $e) {
	echo 'Message: ' . $e->getMessage();
}
mysqli_close($conexion);
