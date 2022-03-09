function showOrders(searchText) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onload=function() {
    if (this.status == 200) {
      document.getElementById("orders").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","../controller/getorders.php?o_id="+searchText,true);
  xmlhttp.send();
}