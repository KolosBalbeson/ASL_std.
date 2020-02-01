document.getElementsByClassName('arrow-left').onclick = sliderRight;

	function sliderRight(){
		var polosa = document.getElementsByClassName('cell-gallary-img');
		right = right - 960;
		polosa.style.right = right + 'px';
	}

