// Функции в коде
// colorMenuAct(); // Окрашивает пункт меню в соотвествии с url

trueText();

// Глобальные* переменные
var userBlock = document.querySelector(".block__user");

// userBlock.addEventListener("mouseover", userInfo);

function userInfo(event) {
	let a = event.getAttribute("id");
	console.log(a);
}

function colorMenuAct() {

}
 
function trueText() {
	var text, findWd, sizeWd, intWd, trueIndexWd, trueWd;
	var i, j, b; // for

	var a = "";

	text = document.querySelector(".content__paragraph p").textContent;
	findWd = "момент";

	sizeWd = findWd.length;
	trueIndexWd = text.toLowerCase().indexOf(findWd);

	for(i = 0; i < sizeWd; i++)
	{
		j = trueIndexWd + i;
		a += text[j];
	}

	console.log(a);
}

