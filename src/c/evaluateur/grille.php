<?php 



$db=connectDB();


$GrilleManager=new GrilleManager($db);

/// PAGE ACCUEIL ///

if(empty($_GET)){ // accueil Collaborateur
    

}

/// PAGE Voir les grilles
if(isset($_GET['updategrille'])){

    $id = $_GET['id'];

    $grille = new Grille(array(
        "id" => htmlspecialchars($id),
    ));

    $updategrille = $GrilleManager->updategrille($grille);

    if(isset($_POST['updategrille'])){ // envoie de nouvelle grille
        
        $id = $_GET['id'];

        $Note = 0;
    
        if (isset($_POST['P']) and $_POST["P"] == "Pro (08)") {
            $Note = $Note + 8;
        } elseif (isset($_POST['P']) and $_POST["P"] == "S/ES (12)") {
            $Note = $Note + 12;
        } elseif (isset($_POST['P']) and $_POST["P"] == "L (09)") {
            $Note = $Note + 9;
        } elseif (isset($_POST['P']) and $_POST["P"] == "STMG (10)") {
            $Note = $Note + 10;
        } elseif (isset($_POST['P']) and $_POST["P"] == "Autres (05)") {
            $Note = $Note + 5;
        }
    
    
    
    
        if (isset($_POST['TS']) and $_POST["TS"] == "OUI (+1)") {
            $Note = $Note + 1;
        } elseif (isset($_POST['TS']) and $_POST["TS"] == "NON (-1)") {
            $Note = $Note - 1;
        }
    
    
        if (isset($_POST['AB']) and $_POST["AB"] == "OUI (-2)") {
            $Note = $Note - 2;
        } elseif (isset($_POST['AB']) and $_POST["AB"] == "NON (+1)") {
            $Note = $Note + 1;
        }
    
    
        if (isset($_POST['ATT']) and $_POST["ATT"] == "OUI (Dossier refusé)") {

        } elseif (isset($_POST['ATT']) and $_POST["ATT"] == "NON (+1)") {
            $Note = $Note + 1;
        }
    
    
        if (isset($_POST['ES']) and $_POST["ES"] == "OUI (+1)") {
            $Note = $Note + 1;
        } elseif (isset($_POST['ES']) and $_POST["ES"] == "NON (-0)") {
            $Note = $Note - 0;
        }
    
    
    
        if (isset($_POST['APP']) and $_POST["APP"] == "Bien (+2)") {
            $Note = $Note + 2;
        } elseif (isset($_POST['APP']) and $_POST["APP"] == "Assez Bien (+1)") {
            $Note = $Note + 1;
        } elseif (isset($_POST['APP']) and $_POST["APP"] == "insuffisant (-1)") {
            $Note = $Note - 1;
        } elseif (isset($_POST['APP']) and $_POST["APP"] == "Negative (-2)") {
            $Note = $Note - 2;
        }
    
    
        if (isset($_POST['AP']) and $_POST["AP"] == "Bien (+2)") {
            $Note = $Note + 2;
        } elseif (isset($_POST['AP']) and $_POST["AP"] == "Assez Bien (+1)") {
            $Note = $Note + 1;
        } elseif (isset($_POST['AP']) and $_POST["AP"] == "insuffisant (-1)") {
            $Note = $Note - 1;
        } elseif (isset($_POST['AP']) and $_POST["APP"] == "Negative (-2)") {
            $Note = $Note - 2;
        }
        
        
        if (isset($_POST['LM']) and $_POST["LM"] == "Bien (+2)") {
            $Note = $Note + 2;
        } elseif (isset($_POST['LM']) and $_POST["LM"] == "Assez Bien (+1)") {
            $Note = $Note + 1;
        } elseif (isset($_POST['LM']) and $_POST["LM"] == "insuffisant (-1)") {
            $Note = $Note - 1;     
        } elseif (isset($_POST['LM']) and $_POST["LM"] == "Negative (-2)") {
            $Note = $Note - 2;
        }
    
            $grille = new Grille(array(
                "id" => htmlspecialchars($id),
                "Nom" => htmlspecialchars($_POST['Nom']),
                "Prenom" => htmlspecialchars($_POST['Prenom']),
                "point_bac" => htmlspecialchars($_POST['P']),
                "point_travail_serieux" => htmlspecialchars($_POST['APP']),
                "point_absence" => htmlspecialchars($_POST['AB']),
                "point_attitude" => htmlspecialchars($_POST['ATT']),
                "point_etude_superieure" => htmlspecialchars($_POST['ES']),
                "point_avis_PP" => htmlspecialchars($_POST['APP']),
                "point_avis_proviseur" => htmlspecialchars($_POST['AP']),
                "point_lettre_motivation" => htmlspecialchars($_POST['LM']),
                "remarque" => htmlspecialchars($_POST['remarque']),
                "statut_dossier" => htmlspecialchars($_POST['Dossier']),
                "total_point" => htmlspecialchars($Note),
                "Numero_Candidat" => htmlspecialchars($_POST['N_candidat']),
            ));
        
            $grillecible = $GrilleManager->Sendupdategrille($grille);
            
            header('Location: ?Grille');
        }
}

/// PAGE update Grille
if(isset($_GET['Grille'])){

    $ListGrille = $GrilleManager->Getallgrille();

    
}


/// PAGE creer une grille
if(isset($_GET['CreateGrille'])){

    
    if(isset($_POST['SendGrille'])){ // envoie de nouvelle grille
        
    $Note = 0;

    if (isset($_POST['P']) and $_POST["P"] == "Pro (08)") {
        $Note = $Note + 8;
    } elseif (isset($_POST['P']) and $_POST["P"] == "S/ES (12)") {
        $Note = $Note + 12;
    } elseif (isset($_POST['P']) and $_POST["P"] == "L (09)") {
        $Note = $Note + 9;
    } elseif (isset($_POST['P']) and $_POST["P"] == "STMG (10)") {
        $Note = $Note + 10;
    } elseif (isset($_POST['P']) and $_POST["P"] == "Autres (05)") {
        $Note = $Note + 5;
    }

    if (isset($_POST['TS']) and $_POST["TS"] == "OUI (+1)") {
        $Note = $Note + 1;
    } elseif (isset($_POST['TS']) and $_POST["TS"] == "NON (-1)") {
        $Note = $Note - 1;
    }

    if (isset($_POST['AB']) and $_POST["AB"] == "OUI (-2)") {
        $Note = $Note -  2;
    } elseif (isset($_POST['AB']) and $_POST["AB"] == "NON (+1)") {
        $Note = $Note + 1;
    }

    if (isset($_POST['ATT']) and $_POST["ATT"] == "OUI (Dossier refusé)") {
    } elseif (isset($_POST['ATT']) and $_POST["ATT"] == "NON (+1)") {
        $Note = $Note + 1;
    }


    if (isset($_POST['ES']) and $_POST["ES"] == "OUI (+1)") {
        $Note = $Note + 1;
    } elseif (isset($_POST['ES']) and $_POST["ES"] == "NON (-0)") {
        $Note = $Note - 0;
    }


    if (isset($_POST['APP']) and $_POST["APP"] == "Bien (+2)") {
        $Note = $Note + 2;
    } elseif (isset($_POST['APP']) and $_POST["APP"] == "Assez Bien (+1)") {
        $Note = $Note + 1;
    } elseif (isset($_POST['APP']) and $_POST["APP"] == "insuffisant (-1)") {
        $Note = $Note - 1;
    } elseif (isset($_POST['APP']) and $_POST["APP"] == "Negative (-2)") {
        $Note = $Note - 2;
    }

    if (isset($_POST['AP']) and $_POST["AP"] == "Bien (+2)") {
        $Note = $Note + 2;
    } elseif (isset($_POST['AP']) and $_POST["AP"] == "Assez Bien (+1)") {
        $Note = $Note + 1;
    } elseif (isset($_POST['AP']) and $_POST["AP"] == "insuffisant (-1)") {
        $Note = $Note - 1;
    } elseif (isset($_POST['AP']) and $_POST["AP"] == "Negative (-2)") {
        $Note = $Note - 2;
    }

    
    if (isset($_POST['LM']) and $_POST["LM"] == "Bien (+2)") {
        $Note = $Note + 2;
    } elseif (isset($_POST['LM']) and $_POST["LM"] == "Assez Bien (+1)") {
        $Note = $Note + 1;
    } elseif (isset($_POST['LM']) and $_POST["LM"] == "insuffisant (-1)") {
        $Note = $Note - 1;     
    } elseif (isset($_POST['LM']) and $_POST["LM"] == "Negative (-2)") {
        $Note = $Note - 2;
    }

        $grille = new Grille(array(
            "Nom" => htmlspecialchars($_POST['Nom']),
            "Prenom" => htmlspecialchars($_POST['Prenom']),
            "point_bac" => htmlspecialchars($_POST['P']),
            "point_travail_serieux" => htmlspecialchars($_POST['TS']),
            "point_absence" => htmlspecialchars($_POST['AB']),
            "point_attitude" => htmlspecialchars($_POST['ATT']),
            "point_etude_superieure" => htmlspecialchars($_POST['ES']),
            "point_avis_PP" => htmlspecialchars($_POST['APP']),
            "point_avis_proviseur" => htmlspecialchars($_POST['AP']),
            "point_lettre_motivation" => htmlspecialchars($_POST['LM']),
            "remarque" => htmlspecialchars($_POST['remarque']),
            "statut_dossier" => htmlspecialchars($_POST['Dossier']),
            "total_point" => htmlspecialchars($Note),
            "Numero_Candidat" => htmlspecialchars($_POST['N_candidat']),
        ));
    
        $grillecible = $GrilleManager->Creategrille($grille);
        
        header('Location: ?Grille');
    }

}

if(isset($_GET['deletegrille'])){ // supprimer une grille

    $id = $_GET['id'];

    $grille = new Grille(array(
        "id" => htmlspecialchars($id),
    ));

    $grillecible = $GrilleManager->deletegrille($grille);

    header('Location: ?Grille');
}

/// PAGE Details d'une grille
if(isset($_GET['detailsgrille'])){

 $id_grille = $_GET['id'];

print_r($_GET['id']);

    $id_User = new User(array(
        "id" => htmlspecialchars($id_grille),
    ));

    $grillecible = $GrilleManager->Getgrillecible($id_User);
}

    





?> 