<?php 

    require("src/m/function.php");
    require("src/m/User.php");
    require('src/c/User.php');

    $db = connectDB();
    $userManager = new UserManager($db);

    $listUsers = $userManager->getList();


if(isset($_GET['deconnexion'])){ // deconnexion
    unset($currentUser) ;
    session_destroy( );
    header('Location: ?');
    }


    if (isset($_SESSION["identifiant"])) {
        // Si ce n'est pas pas la première connexion du user, on get le login et mdp via la session

        $dataUser = connect($listUsers, $_SESSION);
        $found = $dataUser["found"];
        $currentUser = $dataUser["currentUser"];

        if($found === false){
            unset($currentUser) ;
            session_destroy( );
            header('Location: ?');
        }

        $_SESSION["type_de_compte"] =  $currentUser->get("type_de_compte");

    } elseif (isset($_POST["identifiant"]) & isset($_POST["mdp"])) { // 1er

        $_SESSION["identifiant"] = $_POST["identifiant"];
        $_SESSION["mdp"] = $_POST["mdp"];

        $dataUser = connect($listUsers, $_POST);
        $found = $dataUser["found"];
        $currentUser = $dataUser["currentUser"];

        if($found === false){
            unset($currentUser) ;
            session_destroy();
            header('Location: ?');
        }

        $_SESSION["type_de_compte"] =  $currentUser->get("type_de_compte");
        

        header('Location: ?');

    }else{

        include("src/v/global/authpage.php");
        
    }


    

    if ( isset($_GET['deconnectUser'])){  // Cliquer sur le bouton deconnecté - destruction de la session en cours.
        unset($currentUser) ;
        session_destroy( );
        header('Location: ?');
    }


?>