<?php
if(isset( $_SESSION[KEY_ERRORS])){
  $errors =  $_SESSION[KEY_ERRORS];
  unset( $_SESSION[KEY_ERRORS]);
}

?>

<!DOCTYPE html>
<!-- Created By CodingLab - www.codinglabweb.com -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <title>Login Form | CodingLab</title> -->
    <link rel="stylesheet" href="<?= WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.connexion.css" ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"/>
  </head>
  <body>
    <div class="bar">
        <div class="im">
        <img src="<?= WEB_PUBLIC."img/logo.png" ?>" alt="" width="8%">
        </div>
        <div class="pp">
         <h1>LE PLAISIR DE JOUER</h1>
        </div>
       
    </div>
    <div class="container">
      <div class="wrapper">
        <div class="title"><span>Login Form</span></div>

        <form id="form" action="<?=WEB_ROOT?>"  method="POST" >
        <div id="error"></div>

        <input type="hidden" name="controller" value="securite">
      <input type="hidden" name="action" value="connexion">

        <?php   if(isset(  $errors ['connexion'])):?>
            <p style="color:red"><?= $errors ['connexion'];?> </p>
          <?php endif?>

          <div class="row">
            <i class="fas fa-user"></i>
            <input type="text" placeholder="Email " name="login" id="login" >
          </div>

          <?php   if(isset(  $errors ['login'])):?>
            <p style="color:red"><?= $errors ['login'];?> </p>
          <?php endif?>

          <div class="row">
            <i class="fas fa-lock"></i>
            <input type="password" placeholder="Password" name="password" id="password">
          </div>

          <?php   if(isset(  $errors ['password'])):?>
            <p style="color:red"><?= $errors ['password'];?> </p>
          <?php endif?>

          <div class="row button" id="row">
            <a href="<?= WEB_ROOT."?controller=securite&action=register" ?>">S'inscrir pour jouer</a>
            <input type="submit" value="Login">
            
          </div>
        </form>
      </div>
    </div>

  </body>
  <script src="<?= WEB_PUBLIC."js".DIRECTORY_SEPARATOR."script.connexion.js" ?>"></script>
</html>

