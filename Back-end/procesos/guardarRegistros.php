<?php
session_start();
?>
<?php

$servername = "localhost";
$username = "root";
$password = "207460988";
$dbname = "HorariosBus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$idRegistro = $_POST['idRegistro'];
$tipoVacuna = $_POST['tipoVacuna'];
$marcaVacuna = $_POST['marcaVacuna'];
$tipoPaciente = $_POST['tipoPaciente'];
$fechaAplicacion = date('d-m-y h:i:s');
$Usuarios_idUsuario = $_POST['Usuarios_idUsuario'];

try {
	$sql = "INSERT INTO `RegistroCovid19`.`Registro_Vacunados` (`tipoVacuna`, `marcaVacuna`, `tipoPaciente`, `fechaAplicacion`, `Usuarios_idUsuario`) 
		VALUES ('$tipoVacuna', '$marcaVacuna', '$tipoPaciente', '$fechaAplicacion', '$Usuarios_idUsuario');";
	$result = mysqli_query($conn, $sql);
	echo $sql;
	if ($result) {
		echo '<script type="text/JavaScript"> 
			alert("El usuario se creó correctamente");
		</script>';
		header("Location: http://18.117.113.184/Proyecto1_PrograIV/Front-end/vacunacionF.php");
	} else {
		echo '<script type="text/JavaScript"> 
			alert("No se pudo crear el usuario");
		</script>';
		header("Location: http://18.117.113.184/Proyecto1_PrograIV/Front-end/vacunacionF.php");
	}
} catch (mysqli_sql_exception $e) {
	throw $e;
} catch (Exception $e) {
	echo 'Message: ' . $e->getMessage();
}
mysqli_close($conexion);
