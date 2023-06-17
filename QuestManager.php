<?php
require 'Quest.php';

//Class permettant la connexion à la bdd
class QuestManager {
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
        public function create($quest) {
            $req = $this->db->prepare("INSERT INTO `quest` (name, minimum_level, maximum_level, number_players, starting_area, starting_npc, reward, realm, user_id, image) VALUES (:name, :minimum_level, :maximum_level, :number_players, :starting_area, :starting_npc, :reward, :realm, :user_id, :image)");
        
            //On hydrate ces données
            // $req->bindValue(":quest_id", null);
            $req->bindValue(":name", $quest[0]);
            $req->bindValue(":minimum_level", $quest[1]); 
            $req->bindValue(":maximum_level", $quest[2]); 
            $req->bindValue(":number_players", $quest[3]); 
            $req->bindValue(":starting_area", $quest[4]); 
            $req->bindValue(":starting_npc", $quest[5]); 
            $req->bindValue(":reward", $quest[6]); 
            $req->bindValue(":realm", $quest[7]);
            $req->bindValue(":user_id", $quest[8]);
            $req->bindValue(":image", $quest[9]);
            
            //Execution de la requête
            $req->execute();
        }

        public function update(QUEST $quest) {
            $req = $this->db->prepare("UPDATE `quest` SET name = :name, minimum_level =:minimum_level, maximum_level = :maximum_level, number_players = :number_players , starting_area = :starting_area , starting_npc = :starting_npc , reward= :reward , realm = :realm , user_id = :user_id, image = :image");
            
            $req->bindValue(":name", $quest->getName());
            $req->bindValue(":minimum_level", $quest->getminimum_level()); 
            $req->bindValue(":maximum_level", $quest->getmaximum_level()); 
            $req->bindValue(":number_players", $quest->getnumber_players()); 
            $req->bindValue(":starting_area", $quest->getstarting_area()); 
            $req->bindValue(":starting_npc", $quest->getstarting_npc()); 
            $req->bindValue(":reward", $quest->getReward()); 
            $req->bindValue(":realm", $quest->getRealm());
            $req->bindValue(":user_id", $quest->getuser_id()); 
            // $req->bindValue(":image", $quest->getImage());  
        
            $req->execute();
        }

        public function getByID(int $quest_id) {
            $req = $this->db->prepare("SELECT * FROM `quest` WHERE quest_id = :quest_id");
            $req->bindValue(":id", $quest_id);

            $data = $req->fetch();
            $quest = new Quest($data);

            return $quest;
        }

        public function getAllQuests() {
            $quests = [];
            $req = $this->db->query("SELECT * FROM `quest`");
            $datas = $req->fetchAll();
            foreach ($datas as $data) {
                $quest = new Quest($data);
                $quests[] = $quest;    
            }
            return $quests;
        }

        public function getAllByString(string $input) {
            $quests = [];
            $req = $this->db->query("SELECT * FROM `quest`WHERE name LIKE :input ORDER BY quest_id");
            $req->bindValue(":input", $input);
            $datas = $req->fetchAll();
            foreach ($datas as $data) {
                $quest = new Quest($data);
                $quests[] = $quest;
            }
            return $quests;
        }

        public function getAllByRealm(string $realm) {
            $quests = [];
            $req = $this->db->query("SELECT * FROM `quest` WHERE realm LIKE :realm");
            $req->bindValue(":realm", $realm);
            $datas = $req->fetchAll();
            foreach ($datas as $data) {
                $quest = new Quest($data);
                $quests[] = $quest;
            }
            return $quests;
        }

        public function delete(int $quest_id) {
            $req = $this->db->prepare("DELETE FROM `quest` WHERE quest_id = :quest_id ");
            $req->bindValue(":quest_id", $quest_id);
            $req->execute();
        }

        
}

