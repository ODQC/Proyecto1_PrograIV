<?php
function connetion()
{
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
    return $conn;
}

class Consulta{
   
    function CantSinRiesgo()
    {

        $conn = connetion();
        $sql1 = "SELECT COUNT(*) FROM `RegistroCovid19`.`Registro_Vacunados` WHERE tipoPaciente = 'Sin Riesgo'";
        $result1 = $conn->query($sql1);
        $value1 = $row = $result1->fetch_assoc();
        $conn->close();
        return implode(",", $value1);
    }


    function CantDeRiesgo()
    {
        $conn = connetion();
        $sql2 = "SELECT COUNT(*) FROM `RegistroCovid19`.`Registro_Vacunados` WHERE tipoPaciente = 'De Riesgo';";
        $result2 = $conn->query($sql2);
        $value2 = $row = $result2->fetch_assoc();
        $conn->close();
        return implode(",", $value2);
    }


    function CantPfizer()
    {
        $conn = connetion();
        $sql3 = "SELECT COUNT(*) FROM `RegistroCovid19`.`Registro_Vacunados` WHERE marcaVacuna ='BioNTech-Pfizer';";
        $result3 = $conn->query($sql3);
        $value3 = $row = $result3->fetch_assoc();
        $conn->close();
        return implode(",", $value3);
    }

    function CantAstra()
    {
        $conn = connetion();
        $sql4 = "SELECT COUNT(*) FROM `RegistroCovid19`.`Registro_Vacunados` WHERE marcaVacuna ='Oxford-Astrazeneca';";
        $result4 = $conn->query($sql4);
        $value4 = $row = $result4->fetch_assoc();
        $conn->close();
        return implode(",", $value4);
    }


    function CantMujeres()
    {

        $conn = connetion();
        $sql5 = "SELECT COUNT(*) FROM `RegistroCovid19`.`Usuarios` WHERE genero = 'Femenino';";
        $result5 = $conn->query($sql5);
        $value5 = $row = $result5->fetch_assoc();
        $conn->close();
        return implode(",", $value5);
    }



    function CantHombres()
    {

        $conn = connetion();
        $sql6 = "SELECT COUNT(*) FROM `RegistroCovid19`.`Usuarios` WHERE genero = 'Masculino';";
        $result6 = $conn->query($sql6);
        $value6 = $row = $result6->fetch_assoc();
        $conn->close();
        return implode(",", $value6);
    }

    function functionMayores65()
    {

        $conn = connetion();
        $sql7 = "SELECT COUNT(*) FROM `RegistroCovid19`.`Usuarios` WHERE edad >= 65";
        $result7 = $conn->query($sql7);
        $value7 = $row = $result7->fetch_assoc();
        $conn->close();
        return implode(",", $value7);
    }
    function functionMenores65()
    {

        $conn = connetion();
        $sql7 = "SELECT COUNT(*) FROM `RegistroCovid19`.`Usuarios` WHERE edad < 65";
        $result7 = $conn->query($sql7);
        $value7 = $row = $result7->fetch_assoc();
        $conn->close();
        return implode(",", $value7);
    }


}
         
?>