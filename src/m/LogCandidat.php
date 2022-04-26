<?php

    require("src/m/LogCandidatManager.php");
    
    class LogCandidat {
        
        // Table users
        private $id;  
        private $idCandidat;
        private $date; 

        
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
