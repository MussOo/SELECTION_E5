<?php

    require("src/m/GrilleManager.php");
    
    class Grille {
        
        // Table users
        private $id;  
        private $Nom;
        private $Prenom; 
        private $point_bac;
        private $point_travail_serieux;
        private $point_absence;
        private $point_attitude;
        private $point_etude_superieure;
        private $point_avis_PP;
        private $point_avis_proviseur;
        private $point_lettre_motivation;
        private $point_remarque;
        private $statut_dossier;
        private $total_point;
        private $Numero_Candidat;

        
        public function __construct($data) {
            $this->hydrate($data);
        }
    
    
        public function hydrate($data) {   
            foreach ($data as $key => $value) {
                $this->set($key, $value);
            }
        }
    
    
        public function set($key, $value) {
            $this->$key = $value;
        }
    
        public function get($key) {
            return $this->$key;
        }
             
    }
?>
