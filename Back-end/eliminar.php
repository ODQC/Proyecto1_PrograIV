<?php

	require_once "php/connect.php";
	if(isset($_GET['idUsuario'])){
		$id=$_GET['idUsuario'];
		$query="DELETE FROM usuario WHERE id='$id'";
		if($mysqli->query($query)){
			echo "Registro eliminado";
		}else{
			echo "Error no se pudo eliminar el registro";
		}
	}else{
		echo "Error no se pudo procesar la peticion";
	}