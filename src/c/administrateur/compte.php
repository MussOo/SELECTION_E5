<?php 
$db=connectDB();


$UserManager=new UserManager($db);

/// PAGE ACCUEIL ///

if(empty($_GET)){ // accueil Collaborateur
    
        $Listuser = $UserManager->getList();
}

/// PAGE avancement_situation
if(isset($_GET['delete'])){

    $id_User = new User(array(
        "id_user" => htmlspecialchars($_GET['delete']),
    ));

    $UserManager->deleteUser($id_User); // fait 

}

/// PAGE Competence Mobiliser
if(isset($_GET['modif'])){

    $id_User = new User(array(
        "id_user" => htmlspecialchars($_GET['modif']),
    ));

    $Usermodif = $UserManager->getusercible($id_User); // fait 

}

if(isset($_POST['Sendmodif'])){
    
        $UpdateUser = new User(array(
            "id" => htmlspecialchars($_GET['modif']),
            "identifiant" => htmlspecialchars($_POST['identifiant']),
            "mdp" => htmlspecialchars($_POST['mdp']),
            "type_de_compte" => htmlspecialchars($_POST['type_de_compte']),
        ));
        $UserManager->Updateuser($UpdateUser); // fait 
    
}

if(isset($_POST['AjoutUser'])){
    
    $AddUser = new User(array(
        "identifiant" => htmlspecialchars($_POST['identifiant']),
        "mdp" => htmlspecialchars($_POST['mot_de_passe']),
        "type_de_compte" => htmlspecialchars($_POST['type_de_compte']),
    ));
    $UserManager->AddUser($AddUser,$otp); // fait 
}
    





?>