// Функции в коде
colorMenuAct();
infoTeamASL();

// Глобальные* переменные
var urlPage, indexPage, arrlinksid, el, attr, 
	findWd, modifWd, trueIndexWd;
var infoAdmins = "json/infoAdmins.json"


// Глобальные* функции
// *Функция поиска нужного el/id/class, а так же их атрибутов
function globAttr(a,b)
{
	/*
	*   a - element
	*   b - атрибуты
	*/
	if(a != null && b != null)
		return document.querySelector(a).getAttribute(b);
	else if(a != null && b == null)
		return document.querySelector(a);
	else
		return console.log("Ошибка!!.\n Не пришли переменные!"); 
}

// *Функция поиска нужного слова из текста
function findWords(searchText,wd)
{
	/*
	*   searchText - текст в котором ведется поиск
	*   wd - разыскиваемое слово
	*/
	var trueSizeWd, summSizes, i, arrTrueWd;
	var trueWd = "";

	if(searchText != null && wd != null)
	{
		sizefindWd = wd.length;
		trueIndexWd = searchText.indexOf(wd);

		for(i = 0; i < sizefindWd; i++)
		{
			summSizes = trueIndexWd + i;
			trueWd += searchText[summSizes];
		}

		arrTrueWd = new Array(trueWd, trueIndexWd);
		return arrTrueWd;
	}
	else
		return console.log("Ошибка, не возможно найти слово.\n Не пришли переменные!","\n"+wd,"\n"+searchText)
}

// *Функция измененеия слова
function removeEl(wd)
{
	// wd - изменяемое слово
	modifWd = wd.replace(/./g, "");
	return modifWd;
}


// $Работа с контентной частью
// $Функция окрашивает пункт меню в соотвествии на какой вкладке находится user
function colorMenuAct()
{
	var findWd, sizeWd, sizeArr, wd, j;

	//urlPage = window.location.href;
	attr = "id";
	el = "body";
	indexPage = globAttr(el,attr);

	arrlinksid = new Array("#new","#med","#ab","#wik");
	sLi =  globAttr(arrlinksid[indexPage]).setAttribute("style", "background-color: #464E6E;");
}

// $Функция добваления информации об команде проекта
function infoTeamASL()
{
	// userBlock.addEventListener("mouseover", userInfo);
	// infoAdmins
	var block_adms, request, i;

	el = new Array(".inner__FOUR__content__users",".inner__THREE__content__users");
	block_adms = new Array(globAttr(el[0]),globAttr(el[1]));

	// insertBlocks(1,2,3,4,5,6,7);

	function insertBlocks(block_adms,lingthArr,idAdm,imgAdm,imgAltAdm,name,secretIdentity)
	{
		return block_adms[lingthArr].innerHTML = '<div class="block__user" id='+idAdm+'><div class="imager__us"><img src='+imgAdm+' alt='+imgAltAdm+'><div class="username">'+name+'</div><div class="nikname">'+secretIdentity+'</div></div></div>';
	}
}