
$(function(){
	$("input#tel").mask("+7 (999) 999-99-99", {placeholder: "7-(999)-999-99-99" });
});


var nbone = 1;

$(document).ready ( function(){
	$(".numb").keyup(function() {
		option = $(".numb").val();
		if (option <= sum) {
			result = option * price;
			$('#price').val(result);
		}else{
			$('.numb').val(nbone);
			$('#price').val(price);
		}
	});
});
			
function next(){
	a = $(".numb").val();
	if (a < sum) {
		a++;
		$('.numb').val(a);
		$('#price').val(price * a);
	}else {
		$('.numb').val(nbone);
		$('#price').val(price);
	}
}
function back(){
	a = $(".numb").val();
	b = $('#price').val();
	if (a > 1 & a < sum) {
		a--;	
		$('.numb').val(a);
		$('#price').val(b - price);
	}else{
		$('.numb').val(nbone);
		$('#price').val(price);
	}
}

function oformlenie(){
	// Imager
	$('.sidebar').addClass('sidebar2');
	$('.sidebar2').removeClass('sidebar');
	// Imager
	$('.content').addClass('content2');
	$('.content2').removeClass('content');
}

function unoformlenie(){
	// Imager
	$('.sidebar2').addClass('sidebar');
	$('.sidebar').removeClass('sidebar2');
	// Imager
	$('.content2').addClass('content');
	$('.content').removeClass('content2');
}
$('.order').click(function() {alert('Благодарим вас за заказ!!'); });