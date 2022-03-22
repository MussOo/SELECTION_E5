<?php

require('src/c/secretaire/grille.php');

if (!isset($_GET["Grille"]) && !isset($_GET["ExportCSV"]) && !isset($_GET["detailsgrille"])){ // Si l'objet currentUser est créé :
    
    include("src/v/" . $_SESSION["type_de_compte"] . '/accueil.php');
    // On redirige avec la valeur qu'on a définie au dessus
   
}

if(isset($_GET['Grille'])){

  include("src/v/secretaire/grille.php");

}elseif(isset($_GET['ExportCSV'])){

        
    include("src/v/secretaire/exportcsv.php");
    
}elseif(isset($_GET['detailsgrille'])){

        
  include("src/v/secretaire/detailsgrille.php");
  
}

?>