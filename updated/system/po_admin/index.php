<!DOCTYPE html>
<?php
  require_once dirname(__DIR__).'/inc/PO_content.php';
  require_once "../inc/theme-controller.php";
  require_once './ajax/themecontrollerAjax.php';
  
  $content=new content();
  $themes=new Themes();
?>


<html>
    <head>
        <title>Admin area</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/style.css" rel="stylesheet" type="text/css">
    </head>
    <body>
        <header>
            <h1>Portfolio orbit</h1>
            <img src="../img/pp.jpg" alt="profile image">
        </header>
        <section id="body">
            <section id="menu-bar">
                <h3>Post types</h3>
                <ul>
                    <?php $content->show_tables(); ?>
                </ul>

                <h3>Themes</h3>
                <?php $themes->getThemes(); ?>
                <div id="themes-details">
                    
                </div>
            </section>

            <section id="template">
                <h1>Welcome to portfolio CMS framework </h1>
                <p>
                    The David’s Bridal email above features a great introductory message. 
                    It thanks new subscribers for making the company part of their wedding day. 
                    You can write something straightforward like, “Welcome to our email list,” or “Thanks for signing up to get our emails.
                    ” Edgy clothing company, NASTY GAL likes to say, “Welcome to the party! We are so happy you’ve found us!” Or, you can be a little more formal like David’s Bridal.
                    There’s no right or wrong way to welcome new guests, just make sure it’s conversational and fits your company’s voice.
                </p>
            </section>
        
        </section>
        <footer>
            <h1>portflioorbit&COPY;2016</h1>
        </footer>
    </body>
    <script src="../js/PO_js.js" type="text/javascript"></script>
    <script src="../js/po_AJAX.js" type="text/javascript"></script>
    <script src="../js/themeController.js" type="text/javascript"></script>
    <script src="../po_admin/PO_js/PO_parse.js" type="text/javascript"></script>
</html>




