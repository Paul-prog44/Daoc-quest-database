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

        public function create(Quest $quest) {
            
        }

        public function update(int $questId) {

        }

        public function getByID(int $questId) {
            
        }

        public function getAll() {
            
        }

        public function delete(int $questId) {

        }
}