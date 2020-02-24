colorMenuAct();

// Проверка страницы, для каждой свои функции
var tag, attr;
var urlPage, arrPages, indexPage;
urlPage = window.location.href;
arrPages = new Array("index","media","aboutAs");

indexPage = globAttr("body","id");
indexPage = removeEl(indexPage) - 1;
urlPage = findWords(urlPage,arrPages[indexPage]);

if(urlPage == arrPages[2])
{
	infoTeamASL();
}


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
		console.log("Ошибка!!.\n Не пришли переменные!"); 
}

// *Функция измененеия слова
function removeEl(word)
{
	// word - изменяемое слово
	var modifWord = word.replace(/0/g, "");
	return modifWord;
}

// *Функция поиска нужного слова из url page	
function findWords(searchText,word)	
{	
	/*	
	*   searchText - текст в котором ведется поиск	
	*   word - нужное слово	
	*/	
	var sizefindWord, trueIndexWord, summSizes, arrTrueWord, i;	
	var trueWord = "";	


	if(searchText != null && word != null)	// $Работа с контентной частью:
	{	
		sizefindWord = word.length;	
		trueIndexWord = searchText.indexOf(word);	

		for(i = 0; i < sizefindWord; i++)	
		{	
			summSizes = trueIndexWord + i;	
			trueWord += searchText[summSizes];	
		}	

		arrTrueWord = new Array(trueWord);	
		return arrTrueWord;	
	}	
	else	
		console.log("Ошибка, не возможно найти слово.\n Не пришли переменные!","\n"+wd,"\n"+searchText)	
}

// $Работа с контентной частью:
// $Функция окрашивает пункт меню в соотвествии на какой вкладке находится user
function colorMenuAct()
{
	var indexPage, arrIdlinks, styleMenu;

	attr = "id";
	tag = "body";
	indexPage = globAttr(tag,attr);
	indexPage = removeEl(indexPage) - 1;

	arrIdlinks = new Array("#new","#med","#ab","#wik");

	styleMenu =  globAttr(arrIdlinks[indexPage]).setAttribute("style", "background-color: #464E6E;");
}

// $Функция добваления информации об команде проекта
function infoTeamASL()
{
	var text;
	var requestURL = "js/json/infoUsers.json";

	var userId, userLinks, userPowers;
	var	sizeArrAdmin;
	var userId, userName, userImage, userAltImg, userSecretId;

    var request = new XMLHttpRequest();
	request.open('GET', requestURL);
	
    request.responseType = 'json';
    request.send();

    request.onload = function() {
      var jsonUsers = request.response;
	  dataUsers(jsonUsers);
	  //deduceInfoUser(jsonUsers);
    }

    function dataUsers(jsonObj) {
    	var creatBlockUsers, i;

    	sizeArrAdmin = jsonObj['Admins'].length;
    	tag = ".attach__block_users";
    	creatBlockUsers = globAttr(tag);

    	for(i = 0; i < sizeArrAdmin; i++){
	    	userId = jsonObj['Admins'][i]['id'];
	    	userName = jsonObj['Admins'][i]['name'];
	    	userImage = jsonObj['Admins'][i]['imager'];
	    	userAltImg = jsonObj['Admins'][i]['alt_imager'];
			userSecretId = jsonObj['Admins'][i]['secretIdentity'];
			
			userLinks = jsonObj['Admins'][i]['links'];
	    	userPowers = jsonObj['Admins'][i]['powers'];
			
	   		//console.log(userId, userName, userImage, userAltImg, userSecretId);
			text = '<div class="block__user" onclick="showInfoUser('+userId+');" id='+userId+'><div class="imager__us"><img src='+userImage+' alt='+userAltImg+'><div class="username">'+userName+'</div><div class="nikname">'+userSecretId+'</div></div></div>';
			creatBlockUsers.innerHTML += text;
		}
	}
}

function showInfoUser(userid)
{
	var arre = new Array(111,2222,3,444,666,7);
	console.log("Всё робит!  ID = " + userid + "   Arr: " + arre[userid]);
}
function hiddenInfoUser()
{
		
}
