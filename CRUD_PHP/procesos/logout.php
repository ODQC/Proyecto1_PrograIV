<?php
	session_start();
	unset($SESSION['username']);
	session_destroy();
	header("Location: Proyecto1_PrograIV/logIn.php");
	
?>