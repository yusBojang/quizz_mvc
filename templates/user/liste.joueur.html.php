
</html>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz-App</title>
    <link rel="stylesheet"  href="<?= WEB_PUBLIC."css".DIRECTORY_SEPARATOR."style.accueil.css" ?>">
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
    <div class="connec">
    <button> <a href="<?=WEB_ROOT."?controller=securite&action=deconnexion"?>">Deconnexion</a></button>
   
    </div>
    <div class="big">
      <div class="part1">
        <div class="part11">
          <img src="<?= WEB_PUBLIC."img/av.png" ?>" alt="">
        </div>
        <ul>
            <li><a href="#"><i class="fas fa-home"></i>Liste des Question</a></li>
            <li><a href="#"><i class="fas fa-address-card"></i>Creer Admin</a></li>
            <li><a href="<?=WEB_ROOT."?controller=user&action=liste.joueur"?>"><i class="fas fa-project-diagram"></i>Liste joueur</a></li>
            <li><a href="#"><i class="fas fa-blog"></i>Creer Question</a></li>
        </ul> 
        
      </div>
      <div class="part2">

      <table>
        <tr>
            <th>nom</th>
            <th>prenom</th>
            <th>score</th>
        </tr>
        <?php foreach($data as $value ):?>
        <tr>
            <td><?=  $value['nom'] ?></td>
            <td><?=  $value['prenom'] ?></td> 
            <td><?=  $value['score'] ?></td>
        </tr>
        <?php endforeach?>
    </table>
      </div>

    </div>

  </div>


</body>
</html>





