<?php
    require('src/c/administrateur/compte.php');


if (!isset($_GET["AjoutUser"]) && !isset($_GET["modif"])){ // Si l'objet currentUser est créé :

include("src/v/" . $_SESSION["type_de_compte"] . '/accueil.php');
    // On redirige avec la valeur qu'on a définie au dessus
}

if(isset($_GET["AjoutUser"])){

    include("src/v/" . $_SESSION["type_de_compte"] . '/AjoutUser.php');
}

if(isset($_GET["modif"])){

    include("src/v/" . $_SESSION["type_de_compte"] . '/modification_de_compte.php');
}

?>