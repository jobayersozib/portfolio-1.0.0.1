<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//require_once '/system/po_admin/ajax/path.php';


function themeCheck(){
    if(file_exists('../config/setup.json')){
        echo "hellow";
    }
    
    else{
        header("Location:./install.php");
    }
    
}

function changeThemeName($themename){
    $str=implode("",file('path.php'));

$fp=fopen('path.php','w');
//replace something in the file string, here i am replacing an IP address from  127.0.0.1 to 127.1.9.9
$str=str_replace("",$themename,$str);
//now, save the file
fwrite($fp,$str,strlen($str));
}