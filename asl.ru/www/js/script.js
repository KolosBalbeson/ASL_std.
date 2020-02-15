// Функции в коде
colorMenuAct(); // Окрашивает пункт меню в соотвествии с url
// Глобальные* переменные
var urlPage, indexPage, arrlinksid, attr, globalTrueWd, 
	findWd;
// Глобальные* функции
function globAttr(a,b)
{
	// a = element, b = атрибуты
	return document.querySelector(a).getAttribute(b);
}

// Контент
function userInfo(e)
{
	// userBlock.addEventListener("mouseover", userInfo);
}

function colorMenuAct()
{
	var findWd, sizeWd, sizeArr, idArr, summ, trueIndexWd, i, j;
	var trueWd = "";

	urlPage = window.location.href;
	indexPage = globAttr("body","id");
	arrlinksid = new Array("#new","#med","#ab","#wik");
	attr = "href";
	sizeArr = arrlinksid.length;

	for (j = 0; j < sizeArr; j++)
	{
    	if(arrlinksid[j] = indexPage)
    	{
    		idArr = arrlinksid[j];
    		break;
    	}
	}

	findWd = globAttr(arrlinksid[idArr],attr); // index.html
	sizeWd = findWd.length;

	trueIndexWd = urlPage.toLowerCase().indexOf(findWd);

	for(i = 0; i < sizeWd; i++)
	{
		summ = trueIndexWd + i;
		trueWd += urlPage[summ];
	}

	console.log(trueIndexWd);
}


