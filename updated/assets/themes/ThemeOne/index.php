<?php
require_once '/system/inc/ThemeIdentifier.php';

?>
<!DOCTYPE html>
<?php 

require_once '/system/inc/PO_content.php';

require_once '/system/inc/PO_connection.php';


require_once '/system/po_admin/ajax/path.php';



?>






<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->

<html>
    <head>
        <meta charset="UTF-8">
        <title><?php $content->project_name(); ?></title>
        <link href="./assets/themes/ThemeOne/css/style.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <header>
            <?php
        
        
            $content->project_name(); 
            
            ?>
        </header>
        
        
        <div>
            <ul>
                <?php $content->show_tables(); ?>
            </ul>
        </div>
        
        
        
        <section>
            
            
            
        </section>
        
    </body>
</html>
