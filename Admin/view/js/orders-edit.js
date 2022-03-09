function jsValidation(editform){

	var payment_status = editform.payment_status.value;
	var order_status = editform.order_status.value;

	var flag = true;

	
	if (payment_status == "") {
		document.getElementById('payment_statusErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		document.getElementById('payment_statusErr').innerHTML = '';
	}

	if (order_status == "") {
		document.getElementById('order_statusErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		document.getElementById('order_statusErr').innerHTML = '';
	}



	return flag;

}