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
class contact_us extends PO_connection {
    //put your code here
    public function add_post($data){
        $id=$data['type'].$data['name'];
        $type=$data['type'];
        $name=$data['name'];
        $address=$data['address'];
        $contact_no=$data['contact_no'];
        echo $id;
        $query="INSERT INTO contact_us (id,type,name,address,contact_no)VALUES('$id','$type','$name','$address','$contact_no')";
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
