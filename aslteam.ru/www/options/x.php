<?php
	include ('../config/conect.php');
	
	$password = $_POST["password"];
	$reppass = $_POST["repairpassword"];
	$email = $_POST["email"];
	$login = $_POST["login"];
	//$gender = $_POST["gender"];
	// $username == $login;
	
	echo $pass. "<br>";
	echo $reppass. "<br>";
	echo $email. "<br>";
	echo $login. "<br>";
	echo $gender. "<br>";
	
	
	$sql_reg = mysqli_query($connect, ' INSERT INTO `user_sait` (`login`) VALUES ('.$login.')');
	//Если вставка прошла успешно
		if ($sql1) {
			echo '<p style="padding-top: 10px; position: absolute; top: 0; width: 100%; text-align: center; font-size: 24px;">Данные успешно добавлены в таблицу!</p>';
		} else {
			echo '<p style="padding-top: 10px; position: absolute; top: 0; width: 100%; text-align: center; font-size: 24px;">Произошла ошибка!!!</p>';
		}
		mysqli_close($connect);
	
?>
