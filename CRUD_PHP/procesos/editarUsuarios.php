<?php

	require_once "../php/connect.php";
	$idUsuario = $_POST['cedula'];
	$nombre = $_POST['nombre'];
	$apellido1 = $_POST['apellido1'];
	$apellido2 = $_POST['apellido2'];
	$email = $_POST['email'];
	$password1 = md5($_POST['password1']);
	$password2 = md5($_POST['password2']);
	$tipoUsuario = $_POST['tipousuario'];
	$genero = $_POST['genero'];
	$telefono = $_POST['telefono'];
	$edad = $_POST['edad'];
	$estadoUsuario = $_POST['estadoUsuario'];
	
	if($$password2!="" && $$password2!="" ){
		$cons="SELECT * FROM RegistroCovid19.Usuarios WHERE idUsuario='$idUsuario'";
		$consulta1=$mysqli->query($cons);
		$fila=$consulta1->fetch_array(MYSQLI_ASSOC);
		
		if($password1==$password2){
			$clave=md5($clave2);
			$campos="Nombre='$nombre',Apellido='$apellido',Email='$email',Clave='$clave'";
		}else{
			echo "Las claves no coinciden";
			exit();
		}
		
		
	}else{
		$campos="Nombre='$nombre',Apellido='$apellido',Email='$email'";
	}
	$query="UPDATE RegistroCovid19.Usuarios SET $campos WHERE id='$id'";
	if($mysqli->query($query)){
		echo "Datos actualizados";
	}else{
		echo "Error no se pudo actualizar los datos";
	}