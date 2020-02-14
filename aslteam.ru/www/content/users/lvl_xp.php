<?php
	$xp = round($row['points'] / $numb1);
	if ($xp >= $lvl1 && $xp < $lvl2){
		$xpi = $xp;
		$lvlLimit = $xp.'/'.$lvl2;
		$widthXp = $xpi * 1.5;
		/***
			* У каждого уровня будет свой цвет
			* 1 лвл
			* цвет: светло-скрый
		***/
		$lvl = $one;
		$color = '#ccc';
		# Надо будет выдовать за каждый лвл up плюху
		# Как будет выглядеть xp: real или int
	}elseif($xp >= $lvl2 && $xp < $lvl3) {
		$xpi = $xp - 100;
		$lvlLimit = $xp.'/'.$lvl3;
		$widthXp = $xpi;
		/***
			* 2 лвл
			* цвет: светло-жёлтый
		***/
		$lvl = $two;
		$color = '#FFFF62';
	}elseif($xp >= $lvl3 && $xp < $lvl4) {
		$xpi = $xp - 250;
		$lvlLimit = $xp.'/'.$lvl4;
		$widthXp = $xpi;
		/***
			* 3 лвл
			* цвет: жёлтый
		***/
		$lvl = $three;
		$color = 'yellow';
	}elseif($xp >= $lvl4 && $xp < $lvl5) {
			$xpi = $xp - 400;
			$lvlLimit = $xp.'/'.$lvl5;
			$widthXp = $xpi;
			/***
				* 4 лвл
				* цвет: светло-зелёный
			***/
			$lvl = $four;
			$color = 'lime';
	}elseif($xp >= $lvl5 && $xp < $lvl6) {
		$xpi = $xp - 550;
		$lvlLimit = $xp.'/'.$lvl6;
		$widthXp = $xpi;
		/***
			* 5 лвл
			* цвет: зелёный
		***/
		$lvl = $five;
		$color = 'green';
	}elseif($xp >= $lvl6 && $xp < $lvl7) {
		$xpi = $xp - 700;
		$lvlLimit = $xp.'/'.$lvl7;
		$widthXp = $xpi;
		/***
			* 6 лвл
			* цвет: светло-синий
		***/
		$lvl = $six;
		$color = '#3AE2CE';
	}elseif($xp >= $lvl7 && $xp < $lvl8) {
		$xpi = $xp - 850;
		$lvlLimit = $xp.'/'.$lvl8;
		$widthXp = $xpi;
		/***
			* 7 лвл
			* цвет: синий
		***/
		$lvl = $seven;
		$color = '#0095FF';
	}elseif($xp >= $lvl8 && $xp < $lvl9) {
		$xpi = $xp - 1000;
		$lvlLimit = $xp.'/'.$lvl9;
		$widthXp = $xpi;
		/***
			* 8 лвл
			* цвет: светло-фиолетовый
		***/
		$lvl = $eich;
		$color = '#C37CE9';
	}elseif($xp >= $lvl9 && $xp < $lvl10) {
		$xpi = $xp - 1100;
		$lvlLimit = $xp.'/'.$lvl10;
		$widthXp = $xpi;
		/***
			* 9 лвл
			* цвет: фиолетовый
		***/
		$lvl = $nine;
		$color = 'purple';
	}elseif($xp >= $lvl10) {
		$xpi = $xp - 1250;
		$lvlLimit = $xp.'/'.'...';
		$widthXp = $xpi;
		/***
			* 10 лвл
			* цвет: xxx
		***/
		$lvl = $ten;
		$color = 'red';
	}else{
		$xpi = $xp;
		$lvlLimit = $xp.'/'.$lvl1;
		$widthXp = $xpi * 15;
		/***
			* 0 лвл
			* цвет: белый
		***/
		$lvl = $zero;
		$color = '#fff';
	}