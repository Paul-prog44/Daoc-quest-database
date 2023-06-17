<?php
require 'image.php';

//Class permettant la connexion à la bdd
class ImagesManager {
    private $db;

    public function __construct() {
        $dbName = "daoc-quest-database";
        $port = 3306;
        $username = "root";
        $password = "";

        try {
            $this->db = new PDO("mysql:host=localhost;dbname=$dbName;port=$port",$username, $password);
        } catch(PDOException $exception) {
            echo $exception->getMessage();
        }

    }
        //Préparation de la requête SQL avec des données vides
        public function create(Image $image) {
            $req = $this->db->prepare("INSERT INTO `image` (name, path) VALUES (:name, :path");
        
            //On hydrate ces données
            $req->bindValue(":name", $image->getName());
            $req->bindValue(":path", $image->getPath()); 
                
            
            //Execution de la requête
            $req->execute();
        }

        public function update(Image $image) {
            $req = $this->db->prepare("UPDATE `image` SET name = :name, minimum_level =:minimum_level, maximum_level = :maximum_level, number_players = :number_players , starting_area = :starting_area , starting_npc = :starting_npc , reward= :reward , realm = :realm , user_id = :user_id, image = :image");
            
            $req->bindValue(":name", $image->getName());
            $req->bindValue(":path", $image->getPath());  
        
            $req->execute();
        }

        public function getByID(int $id) {
            $req = $this->db->prepare("SELECT * FROM `image` WHERE id = :id");
            $req->bindValue(":id", $id);

            $data = $req->fetch();
            $image = new Image($data);

            return $image;
        }


        public function delete(int $id) {
            $req = $this->db->prepare("DELETE FROM `image` WHERE id = :id ");
            $req->bindValue(":id", $id);
            $req->execute();
        }

        
}

