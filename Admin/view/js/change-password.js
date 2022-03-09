function jsValidation(changepass){

	var currentpassword = changepass.currentpassword.value;
	var newpassword = changepass.newpassword.value;
	var confirmpassword = changepass.confirmpassword.value;

	var flag = true;

	
	if (currentpassword == "") {
		document.getElementById('currentpasswordErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		var xmlhttp = new XMLHttpRequest();
			xmlhttp.onload = function(){
				if (this.status == 200) {
					if(this.responseText == "current password doesn't match" ){
						document.getElementById('currentpasswordErr').innerHTML = this.responseText;
						flag = false;

					}
					else{
						document.getElementById('currentpasswordErr').innerHTML = this.responseText;
					}
				}
			}
			xmlhttp.open("GET", "../controller/check-current-password.php?currentpassword="+changepass.currentpassword.value, false);
			xmlhttp.send();
	}


	if (newpassword == "") {
		document.getElementById('newpasswordErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
		else{
		if (newpassword.length < 4) {
			document.getElementById('newpasswordErr').innerHTML = 'password minimum 4 characters';
			flag = false;
		}
		else if (newpassword.length > 8) {
			document.getElementById('newpasswordErr').innerHTML ='password maximum 8 characters';
			flag = false;
		}
		else if (newpassword == currentpassword) {
			document.getElementById('newpasswordErr').innerHTML ='please choose a new password';
			flag = false;
		}
		else{
			document.getElementById('newpasswordErr').innerHTML = '';
		}
	}


	if (confirmpassword == "") {
		document.getElementById('confirmpasswordErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		if (confirmpassword != newpassword) {
			document.getElementById('confirmpasswordErr').innerHTML = "New password and confirm password doesn't match";
			flag = false;
		}
		else{
			document.getElementById('confirmpasswordErr').innerHTML = '';
		}
	}


	return flag;

}