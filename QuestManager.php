<?php


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
        public function create(Quest $quest) {
            $req = $this->db->prepare("INSERT INTO `quest` (name, minimum_level, maximum_level, number_players, starting_area, starting_npc, reward, realm, user_id) VALUES (:name, :minimum_level, : maximum_level, :number_players, :starting_area, :starting_npc, :reward, :realm, :user_id ");
        
            //On hydrate ces données
            $req->bindValue(":name", $quest->getName());
            $req->bindValue(":minimum_level", $quest->getMinimumLevel()); 
            $req->bindValue(":maximum_level", $quest->getMaximumLevel()); 
            $req->bindValue(":number_players", $quest->getNumberPlayers()); 
            $req->bindValue(":starting_area", $quest->getStartingArea()); 
            $req->bindValue(":starting_npc", $quest->getStartingNpc()); 
            $req->bindValue(":reward", $quest->getReward()); 
            $req->bindValue(":realm", $quest->getRealm());
            $req->bindValue(":user_id", $quest->getUserId());  
            
            //Execution de la requête
            $req->execute();
        }

        public function update(int $questId) {

        }

        public function getByID(int $quest_id) {
            $req = $this->db->prepare("SELECT * FROM `quest` WHERE quest_id = :quest_id");
            $req->bindValue(":id", $quest_id);

            $data = $req->fetch();
            $quest = new Quest($data);

            return $quest;
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

        public function getAll() {
            $quests = [];
            $req = $this->db->query("SELECT * FROM `quest` ORDER BY quest_id");
            $datas = $req->fetchAll();
            foreach ($datas as $data) {
                $quest = new Quest($data);
                $quests[] = $quest;
            }
            return $quests;
        }

        public function delete(int $questId) {
            
        }
}