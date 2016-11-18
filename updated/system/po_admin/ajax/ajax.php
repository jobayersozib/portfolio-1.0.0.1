<?php

require_once dirname(__DIR__)."/../inc/PO_content.php";

$obj=new content();
$file_name=$obj->table_format($_POST['filename'],' ','_');
if(file_exists(dirname(__DIR__).'/po_templates/'.$file_name.'.html')){

    echo file_get_contents(dirname(__DIR__).'/po_templates/'.$file_name.'.html');
}
else{
    echo $file_name.' Template not found';
}


