<?php

function connectDB() { // connexion a la bdd (configuration dans Config.php)

    try { $bdd = new PDO('mysql:host=' . DB_HOST .';dbname=' . DB_NAME .';charset=utf8', DB_USER, DB_PWD); 
          $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo 'Échec lors de la connexion : ' . $e->getMessage();
        }
        return $bdd;
    
}

function connect($list, $type) {    // verification sur le compte existe.
    foreach ($list as $key => $value) {
        if ($type["identifiant"] == $value->get("identifiant") and $type["mdp"] == $value->get("mdp")) {
            
            $found = true;
            $currentUser = $value;
            
        }
    }  
    return array(
        "found" => isset($found) ? $found : false,
        "currentUser" => isset($currentUser) ? $currentUser : false,
    );  
}

?>