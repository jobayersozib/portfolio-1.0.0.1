<?php
require_once ("PO_connection.php");
/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of content
 *
 * @author jobayer
 */
class content extends PO_connection{
    
    public function project_name(){
        
        
        $info=$this->get_config();
        echo $info['project_name'];
        
    }
    public function table_format($tb_name,$trace_str=null,$replace_str=null){
        return str_replace($trace_str,$replace_str,$tb_name); 
    }

    public function show_tables(){
       $arr=$this->get_config();
       foreach ($arr['db_tables'] as $info){
            echo '<li class="menu-bar"><a href="#">'.$this->table_format($info,"_"," ").'</a></li>';
        }
    }
}
$content = new content();