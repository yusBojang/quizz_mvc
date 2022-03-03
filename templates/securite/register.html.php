<?php
if(isset( $_SESSION[KEY_ERRORS])){
  $errors =  $_SESSION[KEY_ERRORS];
  unset( $_SESSION[KEY_ERRORS]);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.register.css" ?>">
  <title>Document</title>
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

  <form id="form" action="<?=WEB_ROOT?>"  method="POST" id="form" >

        <input type="hidden" name="controller" value="securite"> 
        <input type="hidden" name="action" value="register">
    <div class="big">
      <div class="container">
    
        <h1>S'INSCRIRE </h1>
          <p>Pour tester votre niveau de culture generale</p>

      <div class="input">
			  	<input type="text" class="input-field" name="nom" id="nom" />
			  	<label class="input-label">nom</label>
          <div class="error"></div>
          <?php   if(isset(  $errors ['nom'])):?>
              <p style="color:red"><?= $errors ['nom'];?> </p>
           <?php endif?>
        
			</div>
      <div class="input">
				  <input type="text" class="input-field" name="prenom" id="prenom" />
			  	<label class="input-label">prenom</label>
          <div class="error"></div>
          <?php   if(isset(  $errors ['prenom'])):?>
            <p style="color:red"><?= $errors ['prenom'];?> </p>
           <?php endif?>
			</div> 
			<div class="input">
				  <input type="text" class="input-field" name="login" id="login" />
				  <label class="input-label">Login</label>
          <div class="error"></div>
          <?php   if(isset(  $errors ['login'])):?>
            <p style="color:red"><?= $errors ['login'];?> </p>
          <?php endif?>
			</div>
			<div class="input">
			  	<input type="password" class="input-field" name="password" id="password" />
				  <label class="input-label" name="passwd">passwordd</label>
          <div class="error"></div>
          <?php   if(isset(  $errors ['password'])):?>
            <p style="color:red"><?= $errors ['password'];?> </p>
           <?php endif?>
			</div>
      <div class="input">
			  	<input type="password" class="input-field" name="password1" id="password1" />
			  	<label class="input-label" name="passwd">confirmer Password</label>
          <div class="error"></div>
         <?php   if(isset(  $errors ['password1'])):?>
            <p style="color:red"><?= $errors ['password1'];?> </p>
           <?php endif?>
			</div>
      <div class="fichier">
        <input type="submit" value="choisir un fichier">
      </div>
     <div class="end">
      <input type="submit" value="Creer un compte">
     </div>
      
    </div>


        
    <div class="part2">
      <img src="<?= WEB_PUBLIC."img/av.png" ?>" alt="">

    </div>

    </div>

    </form>

    

  
</body>

<script src="<?= WEB_PUBLIC."js".DIRECTORY_SEPARATOR."script.register.js" ?>"></script>
</html>