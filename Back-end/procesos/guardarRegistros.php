<?php
session_start();
?>
<?php
require_once "../php/connect.php";
$idRegistro = $_POST['idRegistro'];
$tipoVacuna = $_POST['tipoVacuna'];
$marcaVacuna = $_POST['marcaVacuna'];
$tipoPaciente = $_POST['tipoPaciente'];
$fechaAplicacion = $_POST['fechaAplicacion'];
$Usuarios_idUsuario = $_POST['Usuarios_idUsuario'];

try {
	$query = "INSERT INTO `RegistroCovid19`.`Registro_Vacunados` (`tipoVacuna`, `marcaVacuna`, `tipoPaciente`, `fechaAplicacion`, `Usuarios_idUsuario`) 
		VALUES ('$tipoVacuna', '$marcaVacuna', '$tipoPaciente', '$fechaAplicacion', '$Usuarios_idUsuario');";
	if ($mysqli->query($query)) {

		echo '<script type="text/JavaScript"> 
							alert("EL registro se guardó correctamente");
						</script>';
	} else {

		echo '<script type="text/JavaScript"> 
								alert("No se puedo guardar el registro correctamente");
							</script>';
	}
} catch (mysqli_sql_exception $e) {
	throw $e;
} catch (Exception $e) {
	echo 'Message: ' . $e->getMessage();
}
mysqli_close($conexion);
