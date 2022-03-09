function jsValidation(lform){

	var username = lform.username.value;
	var password = lform.password.value;

	var flag = true;

	if (username == "") {
		document.getElementById('usernameErr').innerHTML = ' field cannot be empty';
		flag = false;
	}
	else{
		document.getElementById('usernameErr').innerHTML = '';
	}


	if (password == "") {
		document.getElementById('passwordErr').innerHTML = ' field cannot be empty';
		flag = false;
	}
	else{
		document.getElementById('passwordErr').innerHTML = '';
	}


	if (flag) {
		var xmlhttp = new XMLHttpRequest();
		xmlhttp.onload = function() {
			if (this.status == 200) {
				if (this.responseText == "username or password is incorrect") {
					document.getElementById('errorMessage').innerHTML = this.responseText;
				}
				else {
					window.location.href = '../../controller/users.php';
				}
			}
		}
		xmlhttp.open("GET", lform.action+"?username="+lform.username.value+"&password="+lform.password.value, true);
		xmlhttp.send();
	}
}