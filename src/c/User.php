<?php



require("src/m/Grille.php");
require("src/m/LogCandidat.php");

    $db = connectDB();

    $LogCandidat = new LogCandidatManager($db); 
    $GrilleManager=new GrilleManager($db);

if(isset($_GET['id_candidat_form'])){ // creation d'un compte collaborateur

    
    $grille = new Grille(array(
        "idCandidat" => htmlspecialchars($_GET['id_candidat']),
    ));

    $LogCandidat = $LogCandidat->postLog($grille);
    
   
    $id_grille = $_GET['id_candidat'];

        $id_User = new User(array(
            "id" => $id_grille
        ));
    
        $grillecible = $GrilleManager->GetgrillebyIdcandidat($id_User);

}

?>