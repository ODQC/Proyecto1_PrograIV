<?php
	require_once "../php/connect.php";
	$tipoVacuna=$_POST['tipoVacuna'];
	$marcaVacuna=$_POST['marcaVacuna'];
	$tipoPaciente=$_POST['tipoPaciente'];
	$fechaAplicacion=$_POST['fechaAplicacion'];
	$cedula = $_POST['cedula'];
	
	$query="INSERT INTO RegistroCovid19.Registro_Vacunados(tipoVacuna,marcaVacuna,tipoPaciente,fechaAplicacion,Usuarios_idUsuario)
	 VALUES('$tipoVacuna','$marcaVacuna','$tipoPaciente','$fechaAplicacion','$cedula')";
	if ($mysqli->query($query)) {

		echo '<script type="text/JavaScript"> 
     				alert("Datos guardados exitosamente");
     			</script>';
	} else {
		echo '<script type="text/JavaScript"> 
     				alert("Error al guardado");
     			</script>';
}
?>