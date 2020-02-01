<?php
	$host = "localhost";
	$login = "root";
	$passw = "";
	$bd = "asl";
	$connect = new mysqli($host, $login, $passw, $bd);

	$mysqli->set_charset("utf8");

	if(!$connect){
		echo "Не удалось подключиться к базе данных!<br>";
		exit(mysql_error());
	}


?>