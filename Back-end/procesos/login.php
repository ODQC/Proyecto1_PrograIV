<?php
session_start();
?>
<?php

	try {


		require_once "../php/connect.php";

		$email = $_POST['email'];
		$password = md5($_POST['contrasenia']);


		$sql = "SELECT * FROM RegistroCovid19.Usuarios WHERE email='$email' AND contrasenia='$password'";

		$result = $conexion->query($sql);


		if ($result->num_rows > 0) {
		}
		$row = $result->fetch_array(MYSQLI_ASSOC);

		if ($password = $row['contrasenia']) {

			$_SESSION['loggedin'] = true;
			$_SESSION['email'] = $email;
			$_SESSION['start'] = time();
			$_SESSION['expire'] = $_SESSION['start'] + (15 * 60);
		} else {
			echo "Username o Password estan incorrectos.";

			echo "<br><a href='../index.html'>Volver a Intentarlo</a>";
		}
	} catch (mysqli_sql_exception $e) {
		throw $e;
	} catch (Exception $e) {
		echo 'Message: ' . $e->getMessage();
	}
mysqli_close($conexion);
