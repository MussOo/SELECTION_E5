<?php
    require('src/c/evaluateur/grille.php');
    

if (!isset($_GET["Grille"]) && !isset($_GET["CreateGrille"]) && !isset($_GET["detailsgrille"]) && !isset($_GET["updategrille"])){ // Si l'objet currentUser est créé :

    include("src/v/" . $_SESSION["type_de_compte"] . '/accueil.php');
    // On redirige avec la valeur qu'on a définie au dessus
    
}

if(isset($_GET['Grille'])){

    include("src/v/evaluateur/grille.php");

}elseif(isset($_GET['CreateGrille'])){

        
    include("src/v/evaluateur/creategrille.php");
    
}elseif(isset($_GET['detailsgrille'])){

        
    include("src/v/evaluateur/detailsgrille.php");
    
}elseif(isset($_GET['updategrille'])){

        
    include("src/v/evaluateur/updategrille.php");
    
}


?>