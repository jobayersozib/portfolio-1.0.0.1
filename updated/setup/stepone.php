<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

require_once './settings.php';
if(isset($_POST['submit'])){
$settings_obj= new Setinfo();
$settings_obj->create_setup_file();
$settings_obj->get_data($_POST);


}
?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="UTF-8">

  <title>setup</title>
  <link rel="stylesheet" href="css/style.css" media="screen" type="text/css" />

</head>

<body>

  <div class="login-card">
    <h1>Welcome to portfolio orbit installation</h1><br>
    <form action="stepone.php" method="post">
    <h3>Project name:</h3>    
    <input type="text" required="required" name="pname" placeholder="Project name"></br>
    <h3>Project Folder:</h3>    
    <input type="text" required="required" name="rpath" placeholder="Project folder name"></br>
    <h3>Database name:</h3>    
    <input type="text" required="required" name="dbname" placeholder="Database name"></br>
    <h3>Database username:</h3>    
    <input type="text" required="required" name="dbuser" placeholder="Database username"></br>
    <h3>Database Password:</h3>
    <input type="password" name="pass" placeholder="Password">
    <h3>Database host:</h3>    
    <input type="text" name="host" placeholder="Database host"></br>
    <input type="submit" name="submit" class="login login-submit" value="submit">
  </form>

  
</div>



</body>

</html>