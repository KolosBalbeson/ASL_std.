// Функции в коде
colorMenuAct(); // Окрашивает пункт меню в соотвествии с url
// Глобальные* переменные
var urlPage, indexPage, arrlinksid, attr, 
	findWd, modifWd, trueIndexWd;

// Глобальные* функции
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
		return console.log("Ошибка, глабольный атрибут не найден.\n Не пришли переменные!"); 
}

function findWords(searchText,wd)
{
	/*
	*   searchText - текст из которого делается выборка
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

function removeEl(wd)
{
	// wd - изменяемое слово
	modifWd = wd.replace(/./g, "");
	return modifWd;
}

// Контент
function colorMenuAct()
{
	var findWd, sizeWd, sizeArr, wd, j;

	//urlPage = window.location.href;
	attr = "id";
	indexPage = globAttr("body",attr);

	arrlinksid = new Array("#new","#med","#ab","#wik");

	sLi =  globAttr(arrlinksid[indexPage]).setAttribute("style", "background-color: #464E6E;");
}


function userInfo(e)
{
	// userBlock.addEventListener("mouseover", userInfo);
}