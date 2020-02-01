<?php
	require_once ('../config/conect.php');
	$news = mysqli_query($connect, " SELECT * FROM `news` ORDER BY id DESC ");
	$top5 = mysqli_query($connect, " SELECT id, userImager, username, points FROM `userbiogrf` ORDER BY `points` DESC LIMIT 3 ");
	
?>
<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>ASLTeam</title>
	<link rel="shortcut icon" href="../../imager/favicon.png" type="image/x-icon">
	<link rel="stylesheet" href="style/main.css" type="text/CSS">
	<link rel="stylesheet" href="style/categ/news.css" type="text/CSS">
	<link rel="stylesheet" href="style/top3.css" type="text/CSS">
    <!-- Font awesome -->
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
</head>
<body>
	<?php include_once ('elem/header.php'); ?>
	<section>
		<div class="container">
			<div class="content">
				<div class="news">
					<div class="logo-news">
						Новости этой недели:
					</div>
					<?php
					while( ($row = mysqli_fetch_assoc($news)) )
					{
					?>
					<!---->
					<a href="new.php?id=<?php echo $row['id']; ?>" class="link-news">
						<ul class="my_block">
							<li class="imager-new" style="background-image: url(images/<?php echo $row['imager'] ; ?>);" name="imagNews"></li>
							<li class="info-new">
								<div class="title" style="color:<?php echo $row['colorNmNews']; ?>;" name="nameNews"><?php echo $row['title']; ?></div>
								<div class="info" style="color:<?php echo $row['colorNews']; ?>;" name="news"><?php echo $row['news']; ?></div>
								<div class="data" style="color:<?php echo $row['colorData']; ?>;" name="data"><?php echo $row['data']; ?></div>
							</li>
						</ul>
					</a>
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