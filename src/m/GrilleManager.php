<?php
    class GrilleManager {
        private $db;

        public function __construct(PDO $db) {
            $this->setDB($db);
        }
        
        public function Getallgrille(){

            $req = $this->db->query("SELECT * FROM grille");

            while ($data = $req->fetch()) {
                $grille[] = new Grille($data);
            }

            return $grille;

        }

        public function Getgrillecible($id_grille){

            $req = $this->db->prepare("SELECT * FROM grille WHERE id = :id ");
                    $req->execute(array(
                    ":id" => $id_grille->get("id")
                    )); 

            while ($data = $req->fetch()) {
                $grille[] = new Grille($data);
            }

            if(isset($grille)){
                return $grille;
            }else{
                echo '';
            }
        }

    public function Creategrille($grille){

        $req = $this->db->prepare('INSERT INTO Grille(Nom, Prenom, point_bac, point_travail_serieux, point_absence, point_attitude, point_etude_superieure, point_avis_PP, point_avis_proviseur, point_lettre_motivation, remarque, statut_dossier, total_point, Numero_candidat) VALUES(:Nom, :Prenom, :point_bac, :point_travail_serieux, :point_absence, :point_attitude, :point_etude_superieure, :point_avis_PP, :point_avis_proviseur, :point_lettre_motivation, :remarque, :statut_dossier, :total_point, :Numero_Candidat)');
        $req->execute(array(
        'Nom' => $grille->get("Nom"),
        'Prenom' => $grille->get("Prenom"),
        'point_bac' => $grille->get("point_bac"),
        'point_travail_serieux' => $grille->get("point_travail_serieux"),
        'point_absence' => $grille->get("point_absence"),
        'point_attitude' => $grille->get("point_attitude"),
        'point_etude_superieure' => $grille->get("point_etude_superieure"),
        'point_avis_PP' => $grille->get("point_avis_PP"),
        'point_avis_proviseur' => $grille->get("point_avis_proviseur"),
        'point_lettre_motivation' => $grille->get("point_lettre_motivation"),
        'remarque' => $grille->get("remarque"),
        'statut_dossier' => $grille->get("statut_dossier"),
        'total_point' => $grille->get("total_point"),
        'Numero_Candidat' => $grille->get("Numero_Candidat"),
        ));


        echo '<P style="color:#229954; font-size:2em;">Grille ajoutée</P>';
    }

    public function deletegrille($grille){

        $req = $this->db->prepare('DELETE FROM `grille` WHERE id = :id');
        $req->execute(array(
            'id' => $grille->get("id"),
            ));
    

        echo '<P style="color:#229954; font-size:2em;">Grille supprimer</P>';
    }


    

    public function updategrille($id_grille){

        $req = $this->db->prepare("SELECT * FROM grille WHERE id = :id ");
        $req->execute(array(
        ":id" => $id_grille->get("id")
        )); 

        while ($data = $req->fetch()) {
            $grille[] = new Grille($data);
        }

        if(isset($grille)){
            return $grille;
        }else{
            echo '';
        }

    }

    public function Sendupdategrille($grille){

        $req = $this->db->prepare('UPDATE grille SET 
        Nom=:Nom,
        Prenom=:Prenom,
        point_bac=:point_bac,
        point_travail_serieux=:point_travail_serieux,
        point_absence=:point_absence,
        point_attitude=:point_attitude,
        point_etude_superieure=:point_etude_superieure,
        point_avis_PP=:point_avis_PP,
        point_avis_proviseur=:point_avis_proviseur,
        point_lettre_motivation=:point_lettre_motivation,
        remarque=:remarque,
        point_remarque=3,
        statut_dossier=:statut_dossier,
        total_point=:total_point,
        Numero_Candidat=:Numero_Candidat 
        WHERE id = :id');

        $req->execute(array(
        'id' => $grille->get("id"),
        'Nom' => $grille->get("Nom"),
        'Prenom' => $grille->get("Prenom"),
        'point_bac' => $grille->get("point_bac"),
        'point_travail_serieux' => $grille->get("point_travail_serieux"),
        'point_absence' => $grille->get("point_absence"),
        'point_attitude' => $grille->get("point_attitude"),
        'point_etude_superieure' => $grille->get("point_etude_superieure"),
        'point_avis_PP' => $grille->get("point_avis_PP"),
        'point_avis_proviseur' => $grille->get("point_avis_proviseur"),
        'point_lettre_motivation' => $grille->get("point_lettre_motivation"),
        'remarque' => $grille->get("remarque"),
        'statut_dossier' => $grille->get("statut_dossier"),
        'total_point' => $grille->get("total_point"),
        'Numero_Candidat' => $grille->get("Numero_Candidat"),
        ));


        echo '<P style="color:#229954; font-size:2em;">Grille ajoutée</P>';
    }

        public function setDB(PDO $db) {
            $this->db = $db;
        }

    }
?>
