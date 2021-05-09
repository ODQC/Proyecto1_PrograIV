<?php
	$mysqli= new mysqli("localhost", "root", "207460988", "RegistroCovid19");
	if(mysqli_connect_errno()){
		echo "Este sitio esta presentando problemas";
	}
	$mysqli->set_charset("utf8");
	?>