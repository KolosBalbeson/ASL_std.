<?php
	while( ($row = mysqli_fetch_assoc($top5)) )
	{
?>
	<div class="users-top5">
		<div class="imager-user" style="background-image: url(avatars/<?php echo $row['userImager']; ?>);"></div>
		<div class="info-user">
			<div class="nickname" style="color:<?php echo $row['colorName']; ?>;"><?php echo $row['username']; ?></div>
			<div class="points"><?php echo $row['points']; ?> points</div>
		</div>
	</div>
	<!---->
<?php
	}	
	mysqli_close($connect);
?>