function jsValidation(addform){

	var p_image = addform.p_image.value;
	var p_name = addform.p_name.value;
	var brand = addform.brand.value;
	var category = addform.category.value;
	var price = addform.price.value;
	var stock = addform.stock.value;

	var flag = true;

	
	if (p_image == "") {
		document.getElementById('p_imageErr').innerHTML = 'please select an image';
		flag = false;
	}
	else{
		document.getElementById('p_imageErr').innerHTML = '';
	}

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
			xmlhttp.open("GET", "../controller/check-productname-exist.php?p_name="+addform.p_name.value+"&p_id=", false);
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