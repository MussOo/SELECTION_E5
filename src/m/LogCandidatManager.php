<?php

    class LogCandidatManager {
        private $db;

        public function __construct(PDO $db) {
            $this->setDB($db);
        }


        public function postLog($id_user){

            
            $req = $this->db->prepare("INSERT INTO `logcandidant`(`idCandidat`, `date`) 
                                        VALUES (:id_candidat,:dat)");
                    $req->execute(array(
                    ":id_candidat" => $id_user->get("idCandidat"),
                    ":dat" => Date('Y/m/d')
                    )); 

            
        }


        public function setDB(PDO $db) {
            $this->db = $db;
        }

    }
?>
