<!DOCTYPE html>
<?php require_once dirname(__DIR__).'/system/inc/PO_connection.php'; ?>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        
        $connection= new PO_connection();
        $connection->install();
        $connection->create_tables();
        $connection->to_dashboard();
        
        ?>
    </body>
</html>
