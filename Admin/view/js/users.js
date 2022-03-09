function showUsers(searchText) {
  var xmlhttp=new XMLHttpRequest();
  xmlhttp.onload=function() {
    if (this.status == 200) {
      document.getElementById("users").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","../controller/getusers.php?username="+searchText,true);
  xmlhttp.send();
}