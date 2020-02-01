<?php

$host = "localhost";
$user = "admin";
$passwd = "";
$db = "aslteam";
$connect = mysqli_connect($host, $user, $passwd, $db);

	mysqli_query($connect, "SET NAMES UTF8");

	if(!$connect)
	{
		echo "<br>Не удалось подключиться к базе данных!<br>";
		exit(mysqli_error());
	}

