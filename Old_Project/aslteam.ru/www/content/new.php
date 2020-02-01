<?php
	//Задаём кодировку
	header('Content-type: text/html; charset=utf-8');
	require_once ('../config/conect.php');
	
	if(isset($_GET['id'])) {
		$id = $_GET['id'];
	}
	$news = mysqli_query($connect, " SELECT * FROM `news`, `img` WHERE news.id='$id' AND '$id' = img.id_galery ");
	$row = mysqli_fetch_array($news);
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<meta name="keyworlds" content="крт. описание">
		<title><?php echo $row['title'];?></title>
		<!-- Подключение шрифтов -->
		<!-- Подключение стилей -->
		<link rel="stylesheet" href="style/main.css" type="text/CSS">
		<link rel="stylesheet" href="style/content.css" type="text/CSS">
		<!-- Подключение javascript -->
	</head>
	<body>
		<?php include_once ('elem/header.php'); ?>
		<section>
			<div class="container">
				<img style="width: 120px;" src="images/<?php echo $row['imager']; ?>" alt="<?php echo $row['title']; ?>">
				<?php echo $row['title']; ?>
				<?php echo $row['news']; ?>
				<?php echo $row['data']; ?>
			</div>
		</section>
		<?php include_once ('elem/footer.php'); ?>
	</body>
</html>