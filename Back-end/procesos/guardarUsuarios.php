<?php
session_start();
?>
<?php

try {
	
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

	$servername = "localhost";
	$username = "root";
	$password = "207460988";
	$dbname = "HorariosBus";

	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	}

	$sql= "INSERT INTO `RegistroCovid19`.`Usuarios`
		(`idUsuario`, `nombre`, `apellido1`, `apellido2`, `email`, `contrasenia`, `tipoUsuario`, `genero`, `telefono`, `edad`,`estadoUsuario` ) 
		VALUES ('$idUsuario', '$nombre', '$apellido1', '$apellido2', '$email', '$contrasenia', '$tipoUsuario', '$genero', '$telefono', '$edad', '$estadoUsuario');";
	echo $sql;
	$result = mysqli_query($conn, $sql);
	if ($result) {
		echo '<script type="text/JavaScript"> 
			alert("El usuario se creó correctamente");
		</script>';
		
	} else {
		echo '<script type="text/JavaScript"> 
			alert("No se pudo crear el usuario");
		</script>';
		
	}
	header("Location:http://18.117.113.184/Proyecto1_PrograIV/Front-end/usuariosF.php");
} catch (mysqli_sql_exception $e) {
	throw $e;
} catch (Exception $e) {
	echo 'Message: ' . $e->getMessage();
}

mysqli_close($conexion);


