<?php
	require_once ('../config/conect.php');
	require_once ('users/lvl.php');
	/**
		* Вывод информации о пользователе: $user_info
		* Вывод задания для пользователя: $user_mission
		*
	**/
	$user_info = mysqli_query($connect, " SELECT * FROM `userbiogrf`, `users` WHERE userbiogrf.id = users.id AND userbiogrf.id = 2 ORDER BY userbiogrf.id ");
	$user_mission = mysqli_query($connect, " SELECT * FROM `mission` ORDER BY `id`");
?>	
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Мой кабинет</title>
	<link rel="shortcut icon" href="../imager/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="style/main.css" type="text/CSS">
	<link rel="stylesheet" href="style/lvl.css" type="text/CSS">
	<link rel="stylesheet" href="style/categ/kb.css" type="text/CSS">
    <!-- Font awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
	<?php include_once ('elem/header.php'); ?>
	<section>
		<div class="container">
			<div class="content">
				<?php
					while($row = mysqli_fetch_assoc($user_mission)) {
					$xpi = round($row['point'] / $numb1);
				?>
				<!---->
				<div class="mybox">
					<div class="mission">
						<div class="mis-inner">
							<div class="mis-name" style="color: <?php echo $row['colorNmMis']; ?>;"><?php echo $row['title']; ?></div> 
							<div class="mis-text">Описание: <span style="color: lime;"><?php echo $row['mission']; ?></span></div> 
							<div class="mis-data">
								Награда: 
								<br>
								<span style="padding: 5px; color: lime;">Опыт: <?php echo $xpi; ?> xp</span>
								<br>
								<span style="padding: 5px; color: lime;">Монеты: <?php echo $row['point']; ?> points</span>
								<br>
							</div> 
							<div class="mis-data">Выполнение: <span style="color: lime;"><?php echo $row['data']; ?></span></div> 
						</div>
						<button><em class="fa fa-check" id="selectable-icon"></em></button>
					</div>
				</div>
				<?php	
					}
				?>
			</div>
			<div class="sidebar">
				<?php
					while( ($row = mysqli_fetch_assoc($user_info)) )
					{
						include ('users/lvl_xp.php');
				?>
				<div class="mybox" style="color:<?php echo $row['colorBody']; ?>;">
					<div class="user-logo">
						<span style="color:<?php echo $row['colorDolj']; ?>;"><?php echo $row['doljnost']; ?><span>
					</div>
					<div style="border-bottom: 1px solid #68CEEB;"></div>
					<div class="user-imager" style="background-image: url(avatars/<?php echo $row['userImager']; ?>);">
					</div>
					<div class="user-nickname">
						<span style="color:<?php echo $row['colorName']; ?>;"><?php echo $row['username']; ?><span>
					</div>
					<div class="user-sell">
						<span><?php echo $row['points']; ?> рoints<span>
					</div>
					<div class="user-sell">
						<div class="lvl" style="color:<?php echo $color; ?>;">
							Уровень: <span><?php echo $lvl; ?></span>
						</div>
						<div class="box-xp">
							<div class="inner-box-xp" style="width:<?php echo $widthXp; ?>px;"></div>
							<span><?php echo $lvlLimit; ?></span>
						</div>
						<div class="clear"></div>
					</div>
					<div class="user-sell">
						<span style="color:<?php echo $row['colorInDolj']; ?>;"><?php echo $row['innerDoljnost']; ?><span>
					</div>
					<div class="user-sell">
						<a id="redaction-but" href="#">Редактировать профиль</a>
					</div>
				</div>
				<?php
					}	
					mysqli_close($connect);
				?>
			</div>
			<div class="clear"></div>
		</div>
	</section>
	<?php include_once ('elem/footer.php'); ?>
</body>
</html>