<?php 

require("src/m/Grille.php");

$db=connectDB();


$GrilleManager=new GrilleManager($db);

/// PAGE ACCUEIL ///

if(empty($_GET)){ // accueil Collaborateur
    

}

/// PAGE avancement_situation
if(isset($_GET['Grille'])){

    $ListGrille = $GrilleManager->Getallgrille();

}

if(isset($_GET['ExportCSV'])){

    $ListGrille = $GrilleManager->Getallgrille();

}

/// PAGE Competence Mobiliser
if(isset($_GET['detailsgrille'])){

 $id_grille = $_GET['id'];

print_r($_GET['id']);

    $id_User = new User(array(
        "id" => htmlspecialchars($id_grille),
    ));

    $grillecible = $GrilleManager->Getgrillecible($id_User);
}

if(isset($_POST['Sendmodif'])){
    if($_POST['Sendmodif']){
        $UpdateUser = new User(array(
            "id" => htmlspecialchars($_POST['id']),
            "identifiant" => htmlspecialchars($_POST['identifiant']),
            "mdp" => htmlspecialchars($_POST['mdp']),
            "type_de_compte" => htmlspecialchars($_POST['type_de_compte']),
        ));
        $UserManager->Updateuser($UpdateUser); // fait 
    }else{
        echo '';
    }
}

if(isset($_POST['ExportCSV'])){

    $results = $GrilleManager->Getallgrille();

    $filename = 'userData.csv';       
    header("Content-type: text/csv");       
    header("Content-Disposition: attachment; filename=$filename");       
    $output = fopen("php://output", "w");       
    $header = array_keys($results[0]);       
    fputcsv($output, $header);       
    foreach($results as $row)       
    {  
         fputcsv($output, $row);  
    }       
    fclose($output);  
}


?> 