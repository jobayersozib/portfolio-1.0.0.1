<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of about_us
 *
 * @author jobayer
 */
require_once '.././inc/PO_connection.php';
class about_us extends PO_connection {
    //put your code here
    public function add_post($data){
        $id=$data['type'].$data['title'];
        $type=$data['type'];
        $title=$data['title'];
        $description=$data['des'];
        echo $id;
        $query="INSERT INTO about_us (id,type,title,description)VALUES('$id','$type','$title','$description')";
        if($this->connect()){
        if(mysqli_query($this->connect(),$query)){
            echo "inserted data";
        }
        else{
            echo 'Try again';
        }
        }
        else{
            echo 'connection fail';
        }
        
    }
}
