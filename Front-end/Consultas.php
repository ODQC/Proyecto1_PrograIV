<?php

$servername = "localhost";
$username = "root";
$password = "207460988";
$dbname = "RegistroCovid19";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql1 = "SELECT COUNT(*) FROM `RegistroCovid19`.`Registro_Vacunados` WHERE tipoPaciente = 'Sin Riesgo'";
$result1 = $conn->query($sql1);
$value1 = $row = $result1->fetch_assoc();
echo $value1;

$sql2 = "SELECT COUNT(*) FROM `RegistroCovid19`.`Registro_Vacunados` WHERE tipoPaciente = 'De Riesgo';";
$result2 = $conn->query($sql2);
$value2 = $row = $result2->fetch_assoc();
echo $value2;

$sql3 = "SELECT COUNT(*) FROM `RegistroCovid19`.`Registro_Vacunados` WHERE marcaVacuna ='BioNTech-Pfizer';";
$result3 = $conn->query($sql3);
$value3 = $row = $result3->fetch_assoc();
echo $value3;

$sql4 = "SELECT COUNT(*) FROM `RegistroCovid19`.`Registro_Vacunados` WHERE marcaVacuna ='Oxford-Astrazeneca';";
$result4 = $conn->query($sql4);
$value4 = $row = $result4->fetch_assoc();
echo $value4;

$sql5 = "SELECT COUNT(*) FROM `RegistroCovid19`.`Usuarios` WHERE genero = 'Femenino';";
$result5 = $conn->query($sql5);
$value5 = $row = $result5->fetch_assoc();
echo $value5;

$sql6 = "SELECT COUNT(*) FROM `RegistroCovid19`.`Usuarios` WHERE genero = 'Masculino';";
$result6 = $conn->query($sql6);
$value6 = $row = $result6->fetch_assoc();
echo $value6;

$sql7 = "SELECT COUNT(*) FROM `RegistroCovid19`.`Usuarios` GROUP BY productVendor HAVING COUNT(*) >= 9 ORDER BY COUNT(*) DESC;";
$result7 = $conn->query($sql7);
$value7 = $row = $result7->fetch_assoc();
echo $value7;



$conn->close();
           

?>