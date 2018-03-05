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
		if ($(window).width() < 760) {
			$("#lgn_err_xs").attr("class", "row visible-xs-block msg");

		} else {
			$("#lgn_err").attr("class", "row hidden-xs msg");
			$("#login-error-lg").html();
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
		error += "The username you have entered already exists <br>";
	}else if (password !== confirm_password) {
		error += "The passwords you have entered do not match <br>";
	}

	if (error === ""){
		return true;
	}else{

		//prompt error message
		if ($(window).width() < 760) {
			$("#creation-error-xs").html("<div class='col-xs-9'>" + error + "</div>");
		} else {
			$("#creation-error-lg").html("<div class='col-sm-8'>" + error + "</div>");
		}

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
		error = "The email you have entered was not found in our database.";
		//prompt error message
		if ($(window).width() < 760) {
			$("#recover-error-xs").html("<div class='col-xs-9'>" + error + "</div>");
		} else {
			$("#recover-error-lg").html("<div class='col-sm-8'>" + error + "</div>");
		}
		return false;
	}
}
