<?php
	require_once "../php/connect.php";
	$idUsuario=$_POST['cedula'];
	$nombre=$_POST['nombre'];
	$apellido1 = $_POST['apellido1'];
	$apellido2=$_POST['apellido2'];
	$email=$_POST['email'];
	$password=md5($_POST['password']);
	$tipoUsuario=$_POST['tipoUsuario'];
	$genero = $_POST['genero'];
	$telefono = $_POST['telefono'];
	$edad = $_POST['edad'];
	$estadoUsuario = $_POST['estadoUsuario'];
	
	try{
		$query="INSERT INTO RegistroCovid19.Usuarios(idUsuario,nombre,apellido1,apellido2,email,contrasenia,tipoUsuario,genero,telefono,edad,estadoUsuario) 
		VALUES('$idUsuario','$nombre','$apellido1','$apellido2','$email','$password','$tipoUsuario','$genero','$telefono','$edad','$estadoUsuario')";
		if($mysqli->query($query)){
			
			echo '<script type="text/JavaScript"> 
						alert("Datos guardados exitosamente");
					</script>';
			
		}else{
			echo '<script type="text/JavaScript"> 
						alert("Error al guardado");
					</script>';
		}
	} catch (Exception $e) {
		echo $e->getMessage();
	}
	?>