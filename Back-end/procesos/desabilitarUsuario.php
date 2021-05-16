<?php
session_start();
?>
<?php


try {

	require_once "../php/connect.php";
	$idUsuario = $_POST['idUsuario'];
	$estadoUsuario = $_POST['estadoUsuario'];

	$query = "UPDATE `RegistroCovid19`.`Usuarios` SET `estadoUsuario` = '$estadoUsuario' WHERE (`idUsuario` = '$idUsuario');";
	if ($mysqli->query($query)) {
		echo "Datos actualizados";
	} else {
		echo "Error no se pudo actualizar los datos";
	}
} catch (mysqli_sql_exception $e) {
	throw $e;
} catch (Exception $e) {
	echo 'Message: ' . $e->getMessage();
}
mysqli_close($conexion);
