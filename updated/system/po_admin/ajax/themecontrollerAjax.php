<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once('path.php');

error_reporting(E_WARNING);
error_reporting(E_COMPILE_WARNING);


function themeLoad($dir,$theme_name){
        //$obj=new PO_connection();
        //$data=$obj->get_config();
        //$path=$data['root-path'];
        //print_r($data);
        
        $var =  scandir($dir);
        //print_r($var);
        for ($i=2;$i<count($var);$i++){

            if($var[$i]==="index.php"){
            $my_file1 =$dir.'/'.$var[$i];
            $handle1 = fopen($my_file1, 'r');
            $data = fread($handle1,filesize($my_file1));
            $my_file = $_SERVER['DOCUMENT_ROOT'].'/'.ROOTPATH.'/index.php';
            
            $handle = fopen($my_file, 'w') or die("Fail  to activate");
            if(fwrite($handle, $data)){
                
                echo $theme_name."-"."is activated</br>";
                
            }
            else{
                echo $theme_name."-"."is failed to activate</br>";
            }
            
            }
            

        }
    }
   
    themeLoad($_POST['dir'],$_POST['theme-name']);