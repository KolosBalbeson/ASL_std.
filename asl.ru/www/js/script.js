// Функции в коде
colorMenuAct();
infoTeamASL();


// Глобальные* переменные
var tag, attr;


// Глобальные* функции:
// *Функция поиска нужного tag/id/class, а так же их атрибутов
function globAttr(a,b)
{
	/*
	*   a - tag/id/class
	*   b - атрибуты
	*/
	if(a != null && b != null)
		return document.querySelector(a).getAttribute(b);
	else if(a != null && b == null)
		return document.querySelector(a);
	else
		return console.log("Ошибка!!.\n Не пришли переменные!"); 
}

// *Функция измененеия слова
function removeEl(word)
{
	// word - изменяемое слово
	var modifWord = word.replace(/0/g, "");
	return modifWord;
}


// $Работа с контентной частью:
// $Функция окрашивает пункт меню в соотвествии на какой вкладке находится user
function colorMenuAct()
{
	var indexPage, arrlinksid, styleMenu;

	attr = "id";
	tag = "body";
	indexPage = globAttr(tag,attr);
	indexPage = removeEl(indexPage) - 1;

	arrlinksid = new Array("#new","#med","#ab","#wik");

	styleMenu =  globAttr(arrlinksid[indexPage]).setAttribute("style", "background-color: #464E6E;");
}

// $Функция добваления информации об команде проекта
function infoTeamASL()
{
	// userBlock.addEventListener("mouseover", userInfo);
	// infoAdmins
	var block_adms, i;

	var infoAdmins = "json/infoAdmins.json"
	var request = new XMLHttpRequest();
	request.open('GET', infoAdmins);

	request.responseType = 'json';
	request.send();

	request.onload = function() {
	  var superHeroes = request.response;
	  populateHeader(superHeroes);
	}


	// insertBlocks(1,2,3,4,5,6,7);

	function insertBlocks(block_adms,lingthArr,idAdm,imgAdm,imgAltAdm,name,secretIdentity)
	{
		return block_adms[lingthArr].innerHTML = '<div class="block__user" id='+idAdm+'><div class="imager__us"><img src='+imgAdm+' alt='+imgAltAdm+'><div class="username">'+name+'</div><div class="nikname">'+secretIdentity+'</div></div></div>';
	}
}