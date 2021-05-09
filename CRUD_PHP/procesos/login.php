<?php
	$email=$_POST['email'];
	$clave=md5($_POST['clave']);
	$query="SELECT * FROM RegistroCovid19.Usuarios WHERE email='$email' AND password='$clave'";
	echo $query;
	$consulta2=$mysqli->query($query);
	if($consulta2->num_rows>=1){
		$fila=$consulta2->fetch_array(MYSQLI_ASSOC);
		session_start();
		$_SESSION['user']=$fila['nombre'];
		$_SESSION['verificar']=true;
		header("Location: seleccionar.php");
	}else{
		echo "Los datos son incorrectos";
	}
	