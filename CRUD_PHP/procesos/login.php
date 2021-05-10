<?php

	try{
		$email=$_POST['email'];
		$password=md5($_POST['password']);
		$query="SELECT * FROM RegistroCovid19.Usuarios WHERE email='$email' AND contrasenia='$password'";
		echo $query;
		$consulta2=$mysqli->query($query);
		if($consulta2->num_rows>=1){
			$fila=$consulta2->fetch_array(MYSQLI_ASSOC);
			session_start();
			$_SESSION['user']=$fila['nombre'];
			$_SESSION['verificar']=true;
			header("Location: index.php");
		}else{
		echo '<script type="text/JavaScript"> 
						alert("La el email o contraseña son incorrectos");
					</script>';
		}
	} catch (Exception $e) {
		echo $e->getMessage();
	}