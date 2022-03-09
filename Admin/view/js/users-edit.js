function jsValidation(editform){

	var u_id = editform.u_id.value;
	var firstname = editform.firstname.value;
	var lastname = editform.lastname.value;
	var dob = editform.dob.value;
	var gender = editform.gender.value;
	var address = editform.address.value;
	var phone = editform.phone.value;
	var email = editform.email.value;
	var username = editform.username.value;
	var password = editform.password.value;

	var flag = true;

	
	if (firstname == "") {
		document.getElementById('firstnameErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		document.getElementById('firstnameErr').innerHTML = '';
	}

	if (lastname == "") {
		document.getElementById('lastnameErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		document.getElementById('lastnameErr').innerHTML = '';
	}


	if (dob == "") {
		document.getElementById('dobErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		document.getElementById('dobErr').innerHTML = '';
	}


	if (gender == "") {
		document.getElementById('genderErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		document.getElementById('genderErr').innerHTML = '';
	}


	if (address == "") {
		document.getElementById('addressErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		document.getElementById('addressErr').innerHTML = '';
	}


	if (phone == "") {
		document.getElementById('phoneErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		if ((phone.length<11) || (phone.length>11)) {
			document.getElementById('phoneErr').innerHTML = 'phone number must be 11 digits';
			flag = false;
		}
		else{
			document.getElementById('phoneErr').innerHTML= '';
		}
	}


	if (email == "") {
		document.getElementById('emailErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		document.getElementById('emailErr').innerHTML = '';
	}


	if (username == "") {
		document.getElementById('usernameErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		if (username.length < 3) {
			document.getElementById('usernameErr').innerHTML = 'username minimum 3 characters';
			flag = false;
		}
		else if (username.length > 10) {
			document.getElementById('usernameErr').innerHTML ='username maximum 10 characters';
			flag = false;
		}
		
		else if (username.length >= 3 && username.length <=10) {
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onload = function(){
				if (this.status == 200) {
					if(this.responseText == 'username already exist'){
						document.getElementById('usernameErr').innerHTML = this.responseText;
						flag = false;

					}
					else{
						document.getElementById('usernameErr').innerHTML = '';
					}
				}
			}
			xmlhttp.open("GET", "../controller/check-username-exist.php?username="+editform.username.value+"&u_id="+editform.u_id.value, false);
			xmlhttp.send();
		}
	}


	if (password == "") {
		document.getElementById('passwordErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		if (password.length < 4) {
			document.getElementById('passwordErr').innerHTML = 'password minimum 4 characters';
			flag = false;
		}
		else if (password.length > 8) {
			document.getElementById('passwordErr').innerHTML ='password maximum 8 characters';
			flag = false;
		}
		else{
			document.getElementById('passwordErr').innerHTML = '';
		}
	}

	return flag;

}