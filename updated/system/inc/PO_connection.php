<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of PO_connection
 *
 * @author jobayer
 */


class PO_connection{
    
    
    public function get_config(){
        
        $content=file_get_contents(dirname(__DIR__).'/config/setup.json');
        return json_decode($content,true);
    }
   

   protected function connect(){
        $config_arr=$this->get_config();
        $connect=mysqli_connect($config_arr['db_host'],$config_arr['db_user'],$config_arr['db_password'],$config_arr['db_name']);
        return $connect;
    }

    public function install() {
        $config_arr=$this->get_config();
        $connect=mysqli_connect($config_arr['db_host'],$config_arr['db_user'],$config_arr['db_password']);
        
        if($connect){
            $db_creation_query="create database {$config_arr['db_name']}";
            
            echo "connected</br>";
            
            
            if(mysqli_query($connect,$db_creation_query)){
                echo "database {$config_arr['db_name']}created</br>";
                
                    
               }
            else{
                echo "database creation fail</br>";
            }
        }
        else{
            echo "error to connect</br> ";
        }
        $this->close($connect);
    }
    public function create_tables(){
        $config_arr=$this->get_config();
        
        if($this->connect()){
            for($i=0;$i<count($config_arr['db_tables']);$i++){
            $key=$config_arr['db_tables'][$i];
            
            $sql=$config_arr[$key];
            if(mysqli_query($this->connect(),$sql)){
                echo "Table {$key} created</br>";
            }
            else{
                echo "Table {$key} fail to create/already exists</br>";
            }
        }
        }
        $this->close($this->connect());
    }
    private function close($connection){
        mysqli_close($connection);
        
    }
    public function to_dashboard(){
        echo '<a href="../system/po_admin/".>click</a>';
    }
}



?>
