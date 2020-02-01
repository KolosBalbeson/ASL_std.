<?php
	require_once ('../config/conect.php');
	$top5 = mysqli_query($connect, " SELECT * FROM `userbiogrf` ORDER BY `points` DESC LIMIT 3 ");
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>ASLTeam</title>
	<link rel="shortcut icon" href="../../imager/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="style/main.css" type="text/CSS">
	<link rel="stylesheet" href="style/top3.css" type="text/CSS">
    <!-- Font awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
	<?php include_once ('elem/header.php'); ?>
	<section>
		<div class="container">
			<div class="content">
				Как играть?
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