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
		if (window.innerWidth < 760) {
			document.getElementByID("lgn_err_xs").setAttribute("class", "row visible-xs-block msg");
		} else {
			document.getElementByID("lgn_err").setAttribute("class", "row hidden-xs msg");
		}
		return false;
	}
}

/* JS validation for creating account. Only checks if username is "demo" or
* passwords do not match
*/
function validateCreateAccount(theForm){
	//
	var username  = theForm.username.value;
	var email = theForm.email.value;
	var password = theForm.password.value;
	var confirm_password = theForm.confirm_password.value;

	var error = "";

	//need to change this eventually
	if (username === "demo"){
		error += "The username you have entered already exists \n";
	}

	if (password !== confirm_password) {
		error += "The passwords you have entered do not match \n";
	}

	if (error === ""){
		return true;
	}else{
		$("#creation-error").html("<div class='col-sm-8'>" + error + "</div>");
		$("#creation-error").removeAttr("hidden");
		return false;
	}
}

function validateRecoverAccount(theForm){
	var email = theForm.email.value;
	var error = "";
	
	if (email === "demo@demo.com") {
		localStorage.setItem("email_recover", email);
		return true;
	} else {
		error = "<div class='col'> The email you have entered was not found in our database. <div>";
		$("#recover-error").html(error);
		$("#recover-error").removeAttr("hidden");
		return false;
	}
}
