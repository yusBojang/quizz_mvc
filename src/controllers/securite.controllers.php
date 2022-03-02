<?php
require_once(PATH_SRC."models".DIRECTORY_SEPARATOR."user.models.php");
if($_SERVER["REQUEST_METHOD"]=="POST"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
            $login = $_POST['login'];
            $password = $_POST['password'];
            connexion($login,$password);
        }elseif($_REQUEST['action']=="register"){
            $nom = $_POST['nom'];
            $prenom = $_POST['prenom'];
            $login = $_POST['login'];
            $password = $_POST['password'];
            $password1 = $_POST['password1'];
            registration( $nom, $prenom,  $login ,  $password , $password1); 
        }


    }
}


if($_SERVER["REQUEST_METHOD"]=="GET"){
    if(isset($_REQUEST['action'])){
        if($_REQUEST['action']=="connexion"){
            require_once(PATH_VIEWS."securite/connexion.html.php");
        //deconnexion
        }elseif($_REQUEST['action']=="register"){
            require_once(PATH_VIEWS."securite/register.html.php");
        }
        
        elseif($_REQUEST['action']=="deconnexion"){
           logout() ;
        }

    }else{
        require_once(PATH_VIEWS."securite/connexion.html.php");
    }
}   

 //us1

 function connexion(string $login,string $password):void{
    
     $errors=[];
     champ_obligatoire('login',$login,$errors);
    if(count($errors)==0){
        valid_email('login',$login,$errors );
    }
    champ_obligatoire('password',$password,$errors);

    if(count($errors)==0){
        //
        $user = find_user_login_password($login ,$password);

        if(count($user)!=0){
            //utilisateur existe
            $_SESSION[KEY_USER_CONNECT]=$user;
            header("location:".WEB_ROOT."?controller=user&action=accueil");
            exit();
        }else{
            //utilisateur nexiste 
       
            $errors['connexion']="login ou mdp incorrecte";
            $_SESSION[KEY_ERRORS]=$errors;
             header("location:".WEB_ROOT);
             exit();
        }
       
    }else{
        //erreur de validation
        $_SESSION[KEY_ERRORS]=$errors;
        header("location:".WEB_ROOT); 
        exit();
    }
 }


 function logout(){
     session_destroy();
     header("location:".WEB_ROOT); 
     exit();
 }


 function registration(string $nom,string $prenom,string $login,string $password,string $password1):void{

    $errors=[];
    champ_obligatoire('nom',$nom,$errors);
    champ_obligatoire('prenom',$prenom,$errors);
    champ_obligatoire('login',$login,$errors);
    if(count($errors)==0){
        valid_email('login',$login,$errors);
    }
    champ_obligatoire('password',$password,$errors);
    champ_obligatoire('password1',$password1,$errors);


    if(count($errors)==0){
        echo "bonjour a tous comment vous allez";

    }else{
        $_SESSION[KEY_ERRORS]=$errors;
        header("location:".WEB_ROOT."?controller=securite&action=register" ); 
        exit();

    }





 }

 
 

    
