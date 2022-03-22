<?php

    require("src/m/UserManager.php");
    
    class User {
        
        // Table users
        private $id;  
        private $identifiant;
        private $mdp; 
        private $type_de_compte;

        
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
