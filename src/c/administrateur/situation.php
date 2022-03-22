<?php 
$db=connectDB();


$UserManager=new UserManager($db);

/// PAGE ACCUEIL ///

if(empty($_GET)){ // accueil Collaborateur
    
    $AllCollaborateur = $UserManager->getList();


}

/// PAGE Avancement situation
if(isset($_GET['avancement_situation'])){

}

/// PAGE Competence Mobiliser
if(isset($_GET['Competence_mobiliser'])){
    
}
    





?>