<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
require_once './PO_connection.php';
require_once '../po_admin/controller/about_us.php';
require_once '../po_admin/controller/contact_us.php';

$obj=$_POST['type'];
$bj_p=new $obj();

 $bj_p->add_post($_POST);
