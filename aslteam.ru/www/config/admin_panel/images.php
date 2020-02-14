<?php
	//Задаём кодировку
	header('Content-type: text/html; charset=utf-8');
	require_once ('../conect.php');
	$id = mysqli_query($connect, " SELECT id, title FROM `news` ");
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
							<select name="id_galary">
								<?php while( ($row = mysqli_fetch_assoc($id)) ){ ?>
								<option value="<?php echo $row['id']; ?>"><?php echo $row['title']; ?></option>
								<?php }?>
							<select>
						</div>
						<div class="sell">
							<p>Прикрепить Картинку:</p>
							<input type="file" name="imager" multiple accept="image/*,image/jpeg,image/png" required>
						</div>
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
		$sql2 = mysqli_query($connect,"INSERT INTO `img` (`title`, `imager`) 
							VALUES ('".$_POST['title']."')");
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