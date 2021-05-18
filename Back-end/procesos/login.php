<?php
session_start();
?>
<?php

try {
	$email = $_POST['email'];
	$password = md5($_POST['password']);
	$admin = 'Doctor';
	$user = 'Paciente';
	$query = "SELECT * FROM RegistroCovid19.Usuarios WHERE email='$email' AND contrasenia='$password'";
	echo $query;
	$consulta2 = $mysqli->query($query);
	if ($consulta2->num_rows >= 1) {
		$fila = $consulta2->fetch_array(MYSQLI_ASSOC);
		session_start();
		$_SESSION['user'] = $fila['nombre'];
		$_SESSION['idUsuario'] = $fila['idUsuario'];
		$_SESSION['tipoUsuario'] = $fila['tipoUsuario'];
		$_SESSION['verificar'] = true;
		$_SESSION['start'] = time();
		$_SESSION['expire'] = $_SESSION['start'] + (15 * 60);
		if($fila['tipoUsuario']== $admin){
			header("Location: ..Front-end/indexAdmin.php");
		} else if ($fila['tipoUsuario'] == $user) {
			header("Location: ../Front-end/indexUsers.php");
		}
		
	} else {
		echo '<script type="text/JavaScript"> 
							alert("La el email o contraseña son incorrectos");
						</script>';
	}
} catch (Exception $e) {
	echo $e->getMessage();
}
mysqli_close($conexion);
?>