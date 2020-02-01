var header_menu_1, header_menu_2;

var hd1, hd2, hd3, hd4;



function choiceValue1 (e)
{
	header_menu_1 = new Array("Оружие","Классы","Мобы","Крафты","Броня","Зелья","Еда","Ресурсы");
	
	hd1 = document.querySelector("#hd1 a").innerHTML = header_menu_1[0];
	hd2 = document.querySelector("#hd2 a").innerHTML = header_menu_1[1];
	hd3 = document.querySelector("#hd3 a").innerHTML = header_menu_1[2];
	hd4 = document.querySelector("#hd4 a").innerHTML = header_menu_1[3];
	
	console.log("menu1");
}
function choiceValue2 (e)
{
	header_menu_2 = new Array("Блоки","Список администрации","Ваши постройки","Декорации");
	
	hd1 = document.querySelector("#hd1 a").innerHTML = header_menu_2[0];
	hd2 = document.querySelector("#hd2 a").innerHTML = header_menu_2[1];
	hd3 = document.querySelector("#hd3 a").innerHTML = header_menu_2[2];
	hd4 = document.querySelector("#hd4 a").innerHTML = header_menu_2[3];
	
	console.log("menu2");
}

head1.onclick = choiceValue1;
head2.onclick = choiceValue2;