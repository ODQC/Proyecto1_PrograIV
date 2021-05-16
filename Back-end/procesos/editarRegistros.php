<?php
session_start();
?>
<?php


try {

	require_once "../php/connect.php";
	$fechaAplicacion = $_POST['fechaAplicacion'];
	$Usuarios_idUsuario = $_POST['Usuarios_idUsuario'];

	$query = "UPDATE `RegistroCovid19`.`Registro_Vacunados` SET `fechaAplicacion` = '$fechaAplicacion' WHERE (`idRegistro` = '3') and (`Usuarios_idUsuario` = '$Usuarios_idUsuario');";
	if ($mysqli->query($query)) {

		echo '<script type="text/JavaScript"> 
					alert("Datos actualizados");
				</script>';
	} else {
		echo '<script type="text/JavaScript"> 
				alert("No se pudo actualizar lo datos");
			</script>';
	}
} catch (mysqli_sql_exception $e) {
	throw $e;
} catch (Exception $e) {
	echo 'Message: ' . $e->getMessage();
}
mysqli_close($conexion);
