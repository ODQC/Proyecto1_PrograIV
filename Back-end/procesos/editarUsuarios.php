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

	$sql = "UPDATE `RegistroCovid19`.`Usuarios` SET `email` = '$email', `tipoUsuario` = '$tipoUsuario', `genero` = '$genero', `telefono` = '$telefono', `edad` = '$edad',`estadoUsuario`= '$estadoUsuario' WHERE (`idUsuario` = '$idUsuario');";
	$result = mysqli_query($conn, $sql);
	echo $sql;
	if ($result) {
		echo '<script type="text/JavaScript"> 
			alert("El usuario se modificó correctamente");
		</script>';
		
	} else {
		echo '<script type="text/JavaScript"> 
			alert("No se pudo modificar el usuario");
		</script>';
		
	}
	header("Location:http://18.117.113.184/Proyecto1_PrograIV/Front-end/usuariosF.php");
} catch (mysqli_sql_exception $e) {
	throw $e;
} catch (Exception $e) {
	echo 'Message: ' . $e->getMessage();
}
mysqli_close($conexion);
