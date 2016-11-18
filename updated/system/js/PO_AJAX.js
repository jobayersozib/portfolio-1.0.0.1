function loadDoc(e) {
   
   var formData = new FormData();
   formData.append("filename",e.target.innerHTML);
    var xhttp = new XMLHttpRequest();
    if(e.target.parentNode.getAttribute("class","menu-bar")){
        xhttp.onreadystatechange = function() {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
         document.getElementById("template").innerHTML =xhttp.responseText;
        }
      };
    }
  xhttp.open("POST","./ajax/ajax.php", true);
  xhttp.send(formData);
}


(function (){
    
    addEventListener("click",loadDoc,false);

})();
