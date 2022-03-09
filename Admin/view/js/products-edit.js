function jsValidation(editform){
	var p_id = editform.p_id.value
	var p_image = editform.p_image.value;
	var p_name = editform.p_name.value;
	var brand = editform.brand.value;
	var category = editform.category.value;
	var price = editform.price.value;
	var stock = editform.stock.value;

	var flag = true;


	if (p_name == "") {
		document.getElementById('p_nameErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{	
			var xmlhttp = new XMLHttpRequest();
			xmlhttp.onload = function(){
				if (this.status == 200) {
					if(this.responseText == 'product name already exist'){
						document.getElementById('p_nameErr').innerHTML = this.responseText;
						flag = false;

					}
					else{
						document.getElementById('p_nameErr').innerHTML = '';
					}
				}
			}
			xmlhttp.open("GET", "../controller/check-productname-exist.php?p_name="+editform.p_name.value+"&p_id="+editform.p_id.value, false);
			xmlhttp.send();
		
	}


	if (brand == "") {
		document.getElementById('brandErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		document.getElementById('brandErr').innerHTML = '';
	}


	if (category == "") {
		document.getElementById('categoryErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		document.getElementById('categoryErr').innerHTML = '';
	}


	if (price == "") {
		document.getElementById('priceErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		document.getElementById('priceErr').innerHTML = '';
	}


	if (stock == "") {
		document.getElementById('stockErr').innerHTML = 'field cannot be empty';
		flag = false;
	}
	else{
		document.getElementById('stockErr').innerHTML= '';
	}

	return flag;
}