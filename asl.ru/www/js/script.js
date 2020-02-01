var blockUser = document.querySelector(".block-user");

/*
blockUser.onmouseover = hoverUser;

function hoverUser(e) {
	function (el) {
		if(!el) return console.log("Null");
		return 
	}

	Console.log();
} 
*/
blockUser.onmouseover = hoverUser;
function hoverUser(e) {
    let idU = e.getAttribute('id');
    console.log(idU);
}