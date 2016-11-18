<?php
require_once 'PO_connection.php';
//$obj=new PO_connection();

class Themes extends PO_connection{
public function getThemes(){
    $this->data=$this->get_config();
   $value=($_SERVER['DOCUMENT_ROOT'].'/'.$this->data['root-path'].'/assets/themes/');
   $obj=  scandir($value);
   for ($i=2;$i<count($obj);$i++){
       echo '<a class="theme-class" href="'.$value.$obj[$i].'">'.$obj[$i].'</a></br>';
   }
}

}




?>