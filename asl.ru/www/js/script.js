// Функции в коде
colorMenuAct();
infoTeamASL();

var el, attr;

// Глобальные* функции
// *Функция поиска нужного tag/id/class, а так же их атрибутов
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

// *Функция измененеия слова
function removeEl(word)
{
	// word - изменяемое слово
	var modifWord = word.replace(/0/g, "");
	return modifWord;
}

// *Функция поиска нужного слова из текста
function findWords(searchText,word)
{
	/*
	*   searchText - текст в котором ведется поиск
	*   word - разыскиваемое слово
	*/
	var sizefindWord, trueIndexWord, summSizes, arrTrueWord, i;
	var trueWord = "";

	if(searchText != null && word != null)
	{
		sizefindWord = word.length;
		trueIndexWord = searchText.indexOf(word);

		for(i = 0; i < sizefindWord; i++)
		{
			summSizes = trueIndexWord + i;
			trueWord += searchText[summSizes];
		}

		arrTrueWord = new Array(trueWord, trueIndexWord);
		return arrTrueWord;
	}
	else
		return console.log("Ошибка, не возможно найти слово.\n Не пришли переменные!","\n"+wd,"\n"+searchText)
}


// $Работа с контентной частью
// $Функция окрашивает пункт меню в соотвествии на какой вкладке находится user
function colorMenuAct()
{
	var indexPage, arrlinksid, styleMenu;

	attr = "id";
	el = "body";
	indexPage = globAttr(el,attr);
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

	// insertBlocks(1,2,3,4,5,6,7);

	function insertBlocks(block_adms,lingthArr,idAdm,imgAdm,imgAltAdm,name,secretIdentity)
	{
		return block_adms[lingthArr].innerHTML = '<div class="block__user" id='+idAdm+'><div class="imager__us"><img src='+imgAdm+' alt='+imgAltAdm+'><div class="username">'+name+'</div><div class="nikname">'+secretIdentity+'</div></div></div>';
	}
}