// Функции в коде
//colorMenuAct(); // Окрашивает пункт меню в соотвествии с url
colorMenuAct();
// Глобальные* переменные
var urlPage, arrlinksid, attr;
// Глобальные* функции
function globVar(a,b)
{
	// a = element, b = атрибуты
	return document.querySelector(a).getAttribute(b);
}

function arrfor(a,b)
{
	// a = array
	var i;
	for (i = 0; i < a.length; i++)
	{
    	if(a[i] = b)
    	{
    		return a[i];
    		break;
    	}
	}
}

// Контент
function userInfo(e)
{
	// userBlock.addEventListener("mouseover", userInfo);
}

function colorMenuAct()
{
	var findWd, sizeWd, sizeArr, summ, trueIndexWd, i, j, a;
	var trueWd = "";

	urlPage = window.location.href;
	arrlinksid = new Array("#new","#med","#ab","#wik");
	attr = "href";

	sizeArr = arrlinksid.length;
	sizeWd = findWd.length;

	findWd = globVar(arrlinksid[2],attr); // index.html


	trueIndexWd = urlPage.toLowerCase().indexOf(findWd);

	for(i = 0; i < sizeWd; i++)
	{
		summ = trueIndexWd + i;
		trueWd += urlPage[summ];
	}

	console.log(urlPage);
}


