function showProducts(searchText) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onload=function() {
    if (this.status == 200) {
      document.getElementById("products").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","../controller/getproducts.php?p_name="+searchText,true);
  xmlhttp.send();
}