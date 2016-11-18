<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
class Setinfo{
    public function create_setup_file(){
        $this->fname=fopen('../system/config/setup.json',"w");
        $this->str=file_get_contents("../system/config/setup-sample.json");
        file_put_contents("../system/config/setup.json",  $this->str);
    }

    public function get_data($data){
        print_r($data);
       $this->str=implode("",file('../system/config/setup.json'));
        $this->str=str_replace('pname',$data['pname'],  $this->str);
        $this->str=str_replace('rpath',$data['rpath'],  $this->str);
        $this->str=str_replace('dbhost',$data['host'],  $this->str);
        $this->str=str_replace('dbname',$data['dbname'],  $this->str);
        $this->str=str_replace('dbuser',$data['dbuser'],  $this->str);
        $this->str=str_replace('dbpass',$data['pass'],  $this->str);
        fwrite($this->fname,$this->str,strlen($this->str));
        
        
    }
}

