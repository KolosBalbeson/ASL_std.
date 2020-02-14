<?php
	//Задаём кодировку
	header('Content-type: text/html; charset=utf-8');
	require_once ('../conect.php');
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Добавление новости</title>
	<link rel="shortcut icon" href="../../imager/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="../../style/main.css" type="text/CSS">
	<link rel="stylesheet" href="style/form.css" type="text/CSS">	
	<link rel="stylesheet" href="style/home.css" type="text/CSS">
</head>
<body>
	<header>
		<?php include_once ('menu.php'); ?>
	</header>
	<section>
		<div class="container">
			<div class="content">
				<form action="formNews.php" method="POST">
					<div class="inner-form">
						<div class="logo-form">
							<p>Добавление новости</p>
						</div>
						<!-- style="display: none;"  -->
						<div class="sell">
							<p>Название Новости:</p>
							<input type="text" name="title" required>
						</div>
						<div class="sell">
							<p>Прикрепить картинку:</p>
							<input type="file" name="imager" multiple accept="image/*,image/jpeg,image/png" required>
						</div>
						<div class="sell">
							<p>Новость:</p>
							<textarea name="news" rows="8" cols="40" required></textarea>
						</div>
						<br>
						<div class="sell">
							<p style="color:#83E2D7;">====================</p>
							<p>Дата:</p>
							<div>Ставиться автоматически, но можно поставить свою:</div>  
							<input type="text" value="<?php echo date('d.m.y'); ?>" name="data">
							<p style="color:#83E2D7;">====================</p>
						</div>
						<!-- Colors -->
						<div class="colors">
							<div class="sell">
								<p>Цвет Наименования:</p>
								<input type="color" value="#ffffff" name="colorNmNews"> 
							</div>
							<div class="sell">
								<p>Цвет Новости:</p>
								<input type="color" value="#ffffff" name="colorNews">  
							</div>
							<div class="sell">
								<div id="data">
									<p>Цвет Даты:</p>
									<input type="color" value="#ffffff" name="colorData"> 
								</div>
							</div>
						</div>
						<!-- Colors -->
						<br>
						<br>
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
		if (isset($_POST["title"]) AND ($_POST["id_galery"])) {
		//Вставляем данные, подставляя их в запрос
		$sql2 = mysqli_query($connect,"INSERT INTO `news` (`title`, `imager`, `news`, `data`, `colorNmNews`, `colorNews`, `colorData`) 
							VALUES ('".$_POST['title']."','".$_POST['imager']."','".$_POST['news']."','".$_POST['data']."','".$_POST['colorNmNews']."','".$_POST['colorNews']."','".$_POST['colorData']."')");
		//Если вставка прошла успешно
		if ($sql2) {
			echo '<p style="padding-top: 10px; position: absolute; top: 65px; width: 100%; text-align: center; font-size: 24px;">Данные успешно добавлены в таблицу!</p>';
		} else {
			echo '<p style="padding-top: 10px; position: absolute; top: 65px; width: 100%; text-align: center; font-size: 24px;">Произошла ошибка!!!</p>';
		}
		}
		mysqli_close($connect);
	?>
</body>
</html>