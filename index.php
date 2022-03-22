<?php

session_start();

require('config/config.php');
require('src/c/Authentification.php');


if(isset($currentUser)){

        if($currentUser->get("type_de_compte") === 'secretaire'){
        
            require('src/c/secretaire_pages.php');
            
        }elseif($currentUser->get("type_de_compte") === 'administrateur'){
        
            require('src/c/administrateur_pages.php');
            
        }elseif($currentUser->get("type_de_compte") === 'evaluateur'){
        
            require('src/c/evaluateur_pages.php');
        }

}
    
?>