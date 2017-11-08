/* TODO: eventually store and validate in a database 
*
*/
function validateLogin(theForm) {
	// Just checking for the credentials "demo" : "demo"

	//use theForm so we can reuse theForm.username for both xs and lg divs
	var username = theForm.username.value;
	var pass = theForm.password.value;

	localStorage.setItem("username", username);
	localStorage.setItem("password", pass);
	
	if (username === "demo" && pass === "demo") {
		return true;
	} else {
		//prompt error message
		$("#lgn_err").removeAttr("hidden");
		$("#lgn_err_xs").removeAttr("hidden");
		return false;
	}
}

/* 
*
*/
function validateCreateAccount(theForm){
	//
}