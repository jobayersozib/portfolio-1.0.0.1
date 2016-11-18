<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

//echo "welcome to set up file";
if(file_exists('../system/config/segtup.json')){
    header("Location:login.php");
}
else{
    require_once './stepone.php';
}
