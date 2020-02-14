<?php
	require_once ('../config/conect.php');
	$img = mysqli_query($connect, " SELECT * FROM `img` ORDER BY `id` DESC ");
?>
<!DOCTYPE html>
<html lang="ru">
	<head>
		<meta charset="UTF-8">
		<title>Медиа</title>
		<link rel="stylesheet" href="style/main.css" type="text/CSS">
		<style>
			.container {
				position: relative;
			}
			
			.x {
				color: #fff;
				position: fixed;
				z-index: 1001;
				right: 50px;
				top: 60px;
				/*display: none;*/
				font-size: 50px;
			}
		
			.arr_img {
				margin: 8px;
				float: left;
			}
		
			.img { 
				height: 180px;
				margin-left: 5px;
				margin-bottom: 5px;
				border-radius: 5px;
				cursor: pointer;
				z-index: 900;
			}
			
			.img:last-child {
				margin-left: 0;
			}
		
			.img:focus {
				z-index: 1000;
				position: absolute;
				width: 100%;
				height: auto;
				top: 0;
				left: 0;
				margin-top: -90px;
			}
		</style>
		<!-- Font awesome -->
		<link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
	</head>
	<body>
		<?php include_once ('elem/header.php'); ?>
		<section>
			<div class="container">
				<?php
				while( ($row = mysqli_fetch_assoc($img)) )
				{
				?>
				<!---->
					<div class="arr_img">
						<img class="img" tabindex="0" src="images/<?php echo $row['imager']; ?>" alt="<?php echo $row['id_galery']; ?>">
					</div>
				<!---->
				<?php
				}	
				mysqli_close($connect);
				?>
				<div class="clear"></div>
				<a href="#" class="x">X</a>
			</div>
		</section>
		<?php include_once ('elem/footer.php'); ?>
	</body>
</html>