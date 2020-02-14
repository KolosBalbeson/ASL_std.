<?php
	# Подключение
	include ('../config/conect.php');
	
	# Проверка
	$pass = $_POST["password"];
	$reppass = $_POST["repairpassword"];
	
	$reg_data = date('d.m.y');
	
	if (($pass == $reppass) AND ($_POST['email'] != ('/#^[-0-9a-z_\.]+@[-0-9a-z^\.]+\.[a-z]{2,}$/i')) ){
		
		
		//шифруем пароль $pass = md5($pass); 
	//Если переменная Name передана
		if (isset($_POST["login"])) {
		//Вставляем данные, подставляя их в запрос
		$sql_reg = mysqli_query($connect, ' INSERT INTO `user_sait` (`login`, `password`, `email`, `gender`) 
							VALUES ('.$_POST["login"].','.$_POST["password"].','.$_POST["email"].','.$_POST["gender"].')');
		//Если вставка прошла успешно
		if ($sql_reg) {
			echo '<p style="padding-top: 10px; position: absolute; top: 0; width: 100%; text-align: center; font-size: 24px;"><a href="../index.html">На сайт</a></p>';
		} else {
			echo '<p style="padding-top: 10px; position: absolute; top: 0; width: 100%; text-align: center; font-size: 24px;">Произошла ошибка!!!  <a href="../register.html">Назад</a></p>';
		}
		}
	}else{
		echo '<p style="padding-top: 10px; position: absolute; top: 0; width: 100%; text-align: center; font-size: 24px;">Пароли не совпадают!  <a href="../register.html">Назад</a></p>';
	}