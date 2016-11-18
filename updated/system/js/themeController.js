/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function loadTheme(e) {
   e.preventDefault();
   //console.log(e.target.getAttribute("href"));
   //console.log(e.target.innerHTML);
   var data = new FormData();
   data.append("dir",e.target.getAttribute("href"));
   data.append("theme-name",e.target.innerHTML);
    var xhttp = new XMLHttpRequest();
    
        xhttp.onreadystatechange = function() {
        if (xhttp.readyState === 4 && xhttp.status === 200) {
         document.getElementById("themes-details").innerHTML=xhttp.responseText;
        }
      };
    
  xhttp.open("POST","./ajax/themeControllerAjax.php", true);
  xhttp.send(data);
}
var select_themeAtag=document.getElementsByClassName("theme-class");

for(var i=0;i<select_themeAtag.length;i++){
    select_themeAtag[i].addEventListener("click",loadTheme,false);
    
}