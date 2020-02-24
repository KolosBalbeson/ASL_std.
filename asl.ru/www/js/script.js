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
		console.log("Ошибка!!.\n Не пришли переменные!"); 
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
	var block_adms, text, i;

    var requestURL = "js/json/infoUsers.json";

    var request = new XMLHttpRequest();
    request.open('GET', requestURL);

    request.responseType = 'json';
    request.send();

    request.onload = function() {
      var jsonUsers = request.response;
	  dataUsers(jsonUsers);
	  deduceInfoUser(jsonUsers);
    }

    function dataUsers(jsonObj) {
    	var i, j;
    	var creatBlockUsers;
    	var sizeArrAdmin, sizeArrAdminLink, sizeArrAdminPower;
    	var userId, userName, userImage, userAltImg, userSecretId, userLink, userAccesLVL, userPowers;
    	var outInfoUser;

    	sizeArrAdmin = jsonObj['Admins'].length;
    	tag = ".attach__block_users";
    	creatBlockUsers = globAttr(tag);

    	for(i = 0; i < sizeArrAdmin; i++){
	    	userId = jsonObj['Admins'][i]['id'];
	    	userName = jsonObj['Admins'][i]['name'];
	    	userImage = jsonObj['Admins'][i]['imager'];
	    	userAltImg = jsonObj['Admins'][i]['alt_imager'];
	    	userSecretId = jsonObj['Admins'][i]['secretIdentity'];
	    	userAccesLVL = jsonObj['Admins'][i]['accesLVL'];

	    	sizeArrAdminLink = jsonObj['Admins'][i]['links'].length;
	    	sizeArrAdminPower = jsonObj['Admins'][i]['powers'].length;
	    	userLink = jsonObj['Admins'][i]['links'];
	    	userPowers = jsonObj['Admins'][i]['powers'];
	   		//console.log(userId, userName, userImage, userAltImg, userSecretId, userLink, userAccesLVL, userPowers);
			text = '<div class="block__user" id='+userId+'><div class="imager__us"><img src='+userImage+' alt='+userAltImg+'><div class="username">'+userName+'</div><div class="nikname">'+userSecretId+'</div></div></div>';
			creatBlockUsers.innerHTML += text;
    	}
	}
	
	function deduceInfoUser(jsonObj)
	{

	}

	
}