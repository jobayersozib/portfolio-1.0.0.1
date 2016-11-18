var i=0;
var fdata=new FormData();
function call(info){
    
    if(info.childNodes.length > 0){
    for(var i=0;i<info.childNodes.length;i++){
        if(info.childNodes[i].childNodes.length>0){
            call(info.childNodes[i]);
        }
        else{
           if(info.childNodes[i].tagName==="INPUT"){
            //alert(info.childNodes[i].id+"  "+info.childNodes[i].value);
            fdata.append(info.childNodes[i].id+"",info.childNodes[i].value+""); 
            //console.log(fdata.getAll(info.childNodes[i].id));
            }
            else if(info.childNodes[i].parentNode.className==="text"){
            //alert(info.childNodes[i].parentNode.id,info.childNodes[i].parentNode.value);
            fdata.append(info.childNodes[i].parentNode.id+"",info.childNodes[i].parentNode.value+"");
            //console.log(fdata.getAll(info.childNodes[i].parentNode.id));
            }
            
        }
    }
    }
   //console.log(fdata); 
    
    
}
function ajax_call(data){
    var xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
     alert(this.responseText);
    }
  };
  xhttp.open("POST", ".././inc/PO_post.php", true);
  xhttp.send(data);
}
addEventListener("click",function(e){
    
    if(e.target.id==="post-data"){
    fdata.append("type",(e.target.getAttribute("data-bind")));
    var data=document.getElementById("form-data");
    
    for(var i=0;i<data.childNodes.length;i++){
        
          call(data.childNodes[i]);
        
    }
 
 console.log(fdata.getAll("text1"));
 console.log(fdata.getAll("type"));
 ajax_call(fdata);
    }
    
     
});
