<?php

    class UserManager {
        private $db;

        public function __construct(PDO $db) {
            $this->setDB($db);
        }


        public function getList(){

            $req = $this->db->query("SELECT * FROM utilisateur");

            while ($data = $req->fetch()) {
                $users[] = new User($data);
            }

            return $users;
        }

        public function getusercible($id_user){

            
            $req = $this->db->prepare("SELECT * FROM utilisateur WHERE id = :id ");
                    $req->execute(array(
                    ":id" => $id_user->get("id_user")
                    )); 

            while ($data = $req->fetch()) {
                $users[] = new User($data);
            }

            return $users;
        }

        public function Updateuser($data){

            
            $req = $this->db->prepare("UPDATE utilisateur SET identifiant = :identifiant, mdp = :mdp, type_de_compte = :type_de_compte WHERE id = :id ");
                    $req->execute(array(
                    ":identifiant" => $data->get("identifiant"),
                    ":mdp" => $data->get("mdp"),
                    ":type_de_compte" => $data->get("type_de_compte"),
                    ":id" => $data->get("id")
                    )); 

                    header('Location: ?');
        }

        public function AddUser($data){

            $req = $this->db->prepare("INSERT INTO `utilisateur`(`identifiant`, `mdp`, `type_de_compte`) VALUES (:identifiant,:mdp,:type_de_compte)");
            
            $req->execute(array(
            ":identifiant" => $data->get("identifiant"),
            ":mdp" => $data->get("mdp"),
            ":type_de_compte" => $data->get("type_de_compte")
            )); 

                    header('Location: ?');
        }


        public function Connexion($identifiant, $mdp){

            $connect = $this->db->query('SELECT * FROM utilisateur'); // Requête SQL : on selectionne tout les users
            $found = false;

            while ($data = $connect->fetch()) {
                if ($identifiant == $data['id'] and $mdp == $data['mdp']) {
                    // Si le login et le mdp sont bon alors :
                    $found = true; // Un utilisateur a été trouvé
                    return $data; // On retourne les données
                }
            }

            if (!$found) {
                // Si a un utilisateur n'a été trouvé :
                echo "Login ou mot de passe incorrect <br>";
                echo "<a href='index.php'> Retour à l'accueil </a>";
                unset($_SESSION["login"]);

                return NULL;
            }
        }

        public function deleteUser($id_user){
           
        
            $req = $this->db->prepare("DELETE FROM `utilisateur` WHERE id = :id ");
                    $req->execute(array(
                    ":id" => $id_user->get("id_user")
                    )); 

                    header('Location: ?');
        }


        public function ChangeOption($methode){

            // Récupération des données de bases
            $option = $methode["liste"];
            $login = $_SESSION["identifiant"];
            $mdp = $_SESSION["mdp"];
    
    
            $req = $this->db->prepare("UPDATE `utilisateur` SET `filliere`=(:filliere) WHERE id = :lo AND mdp = :mdp");
                    $req->execute(array(
                    ":filliere" => $option,
                    ":lo" => $login,
                    ":mdp" => $mdp
                    )); 
    
                    echo '<script language=javascript> alert(\'Vous avez choisie '. $option.'\'); </script> ';
                    ?> 
                    <script>
                    document.location.href="index.php?";
                    </script>
                    
                    <?php
        }
        

        public function setDB(PDO $db) {
            $this->db = $db;
        }

    }
?>
