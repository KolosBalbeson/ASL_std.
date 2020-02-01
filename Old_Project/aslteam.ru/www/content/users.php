<?php
	require_once ('../config/conect.php');
	require_once ('users/lvl.php');
	$userbiogrf = mysqli_query($connect, " SELECT * FROM `userbiogrf`, `users` WHERE userbiogrf.id = users.id ORDER BY userbiogrf.points ");
	$top5 = mysqli_query($connect, " SELECT * FROM `userbiogrf` ORDER BY `points` DESC LIMIT 3 ");
?>																
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Пользователи</title>
	<link rel="shortcut icon" href="../imager/favicon.png" type="image/x-icon">
    <!-- Style -->
	<link rel="stylesheet" href="style/main.css" type="text/CSS">
	<link rel="stylesheet" href="style/content.css" type="text/CSS">
	<link rel="stylesheet" href="style/top3.css" type="text/CSS">
	<link rel="stylesheet" href="style/lvl.css" type="text/CSS">
    <!-- Font awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
	<?php include_once ('elem/header.php'); ?>
	<section>
		<div class="container">
			<div class="content">
				<div class="news" style="color: #fff;">
					<!---->
					<div class="logo-news">
						Наш коллектив:
					</div>
					<!---->
					<?php
					while( ($row = mysqli_fetch_assoc($userbiogrf)) )
					{
						include ('users/lvl_xp.php');
					?>
					<div class="inform-user" style="color:<?php echo $row['colorBody']; ?>;">
						<div class="imager-new" style="background-image: url(avatars/<?php echo $row['userImager']; ?>);"></div>
						<div class="info-users">
							<div class="all-info">Имя: <span style="color:<?php echo $row['colorName']; ?>;"><?php echo $row['username']; ?></span></div>
							<div class="all-info">Кр. биография: <span><?php echo $row['biograf']; ?></span></div>
							<div class="all-info">Должность: <span style="color:<?php echo $row['colorDolj']; ?>;"><?php echo $row['doljnost']; ?></span></div>
							<div class="all-info">Под должность: <span style="color:<?php echo $row['colorInDolj']; ?>;"><?php echo $row['innerDoljnost']; ?></span></div>
							<div class="all-info">
							<div class="lvl" style="color:<?php echo $color; ?>;">Уровень: <span><?php echo $lvl; ?></span></div>
							<div class="box-xp">
								<div class="inner-box-xp" style="width:<?php echo $widthXp; ?>px;"></div>
								<span><?php echo $lvlLimit; ?></span>
							</div>
							</div>
						</div>
						<div class="clear"></div>
					</div>
					<!---->
					<?php
					}	
					?>
				</div>
			</div>
			<div class="sidebar">
				<div class="users">
					<!---->
					<div class="logo-user">Лидеры этой недели: </div>
					<!---->
					<?php include_once ('users/topuses.php'); ?>
				</div>
			</div>
			<div class="clear"></div>
		</div>
	</section>
	<?php include_once ('elem/footer.php'); ?>
</body>
</html>