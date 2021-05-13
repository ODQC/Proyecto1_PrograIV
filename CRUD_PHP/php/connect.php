<?php
	$host_db = "localhost";
	$user_db = "root";
	$pass_db = "207460988";
	$db_name = "RegistroCovid19";
	try{
		$mysqli= new mysqli($host_db, $user_db, $pass_db, $db_name);
		if(mysqli_connect_errno()){
			echo "Este sitio esta presentando problemas";
		}
		$mysqli->set_charset("utf8");
	}catch(PDOException $e) {
		echo "Connection failed: " . $e->getMessage();
	}
?>