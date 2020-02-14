<?php
	//Задаём кодировку
	header('Content-type: text/html; charset=utf-8');
	require_once ('../conect.php');
	$user_info = mysqli_query($connect, " SELECT userbiogrf.id, userbiogrf.username, users.id, users.login FROM `userbiogrf`, `users` WHERE userbiogrf.id = users.id ORDER BY userbiogrf.id ");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Добавление Заданий</title>
	<link rel="shortcut icon" href="../../imager/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="../../style/main.css" type="text/CSS">
	<link rel="stylesheet" href="style/form.css" type="text/CSS">	
	<link rel="stylesheet" href="style/home.css" type="text/CSS">	
</head>
<body>
<?php
	$data = date('d.m.y');
	$update = date('d.m');
	
	$clelem = '#dddfff';
	
	
?>
	<header>
		<?php include_once ('menu.php'); ?>
	</header>
	<section>
		<div class="container">
			<div class="content">
				<form action="formUsers.php" method="POST">
					<div class="inner-form">
						<div class="logo-form">
							<p style="color:#fff;">Добавление заданий</p>
						</div>
						<div class="sell">
							<p>Сегодня: <?php echo $data; ?></p>
						</div>
						<div class="sell">
							<p>Имя пользователя:</p>
							<select type="text" name="usernam">
								<?php while( ($row = mysqli_fetch_assoc($user_info)) ){ ?>
								<option value="<?php echo $row['login']; ?>"><?php echo $row['username']; ?></option>
								<?php }?>
							</select>
						</div>
						<div class="sell">
							<p>Название задания:</p>
							<input type="text" name="title" required>
						</div>
						<div class="sell">
							<p>Задание:</p>
							<textarea name="mission" rows="8" cols="40" required></textarea>
						</div>
						<br>
						<div class="sell">
							<p>Количество поинтов:</p>
							<input type="text" name="point" required>
						</div>
						<br>
						<div class="sell">
							<p style="color:#83E2D7;">====================</p>
							<p>Дата выполнения:</p>
							<input type="text" value="С <?php echo $update; ?> по <?php echo $update; ?>" name="data">
							<p style="color:#83E2D7;">====================</p>
						</div>
						<!-- Colors -->
						<div class="colors">
							<div class="sell">
								<p>(в разработке!)</p>
								<input type="color" name="clbody"> 
							</div>
							<div class="sell">
								<p>Цвет Наименования:</p>
								<input type="color" value="<?php echo $clelem;?>" name="colorNmMis"> 
							</div>
							<div class="sell">
								<p>Цвет Задания:</p>
								<input type="color" value="<?php echo $clelem;?>" name="colorMis">  
							</div>
							<div class="sell">
								<div id="data">
									<p>Цвет Даты:</p>
									<input type="color" value="<?php echo $clelem;?>" name="colorData"> 
								</div>
							</div>
						</div>
						<!-- Colors -->
						<input type="reset" value="Сбросить информацию"> 
						<div style="border-top: 1px solid #83E2D7;">
							<input type="submit" value="Отправить">
						</div>
						<div class="clear"></div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<?php
		//Если переменная Name передана
		if (isset($_POST["usernam"])) {
		//Вставляем данные, подставляя их в запрос
		$sql1 = mysqli_query($connect,"INSERT INTO `mission` (`username`, `title`, `mission`, `point`, `data`, `colorNmMis`, `colorMis`, `colorData`) 
							VALUES ('".$_POST['usernam']."','".$_POST['title']."','".$_POST['mission']."','".$_POST['point']."','".$_POST['data']."','".$_POST['colorNmMis']."','".$_POST['colorMis']."','".$_POST['colorData']."')");
		//Если вставка прошла успешно
		if ($sql1) {
			echo '<p style="padding-top: 10px; position: absolute; top: 65px; width: 100%; text-align: center; font-size: 24px;">Данные успешно добавлены в таблицу!</p>';
		} else {
			echo '<p style="padding-top: 10px; position: absolute; top: 65px; width: 100%; text-align: center; font-size: 24px;">Произошла ошибка!!!</p>';
		}
		}
		mysqli_close($connect);
	?>
</body>
</html>