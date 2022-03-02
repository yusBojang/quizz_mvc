<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
            echo "traiter le formulaire de connexion";
        }

    }
}


if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
        if(!is_connect()) {
            header("location:".WEB_ROOT);
            exit();
        }
        if($_REQUEST['action']=="accueil"){
            require_once(PATH_VIEWS."user/accueil.html.php");
        }elseif($_REQUEST['action']=="liste.joueur"){
            lister_joueur();
        }


    }
}

function lister_joueur(){
    $data = find_user(ROLE_JOUEUR);
    require_once(PATH_VIEWS."user/liste.joueur.html.php");
}