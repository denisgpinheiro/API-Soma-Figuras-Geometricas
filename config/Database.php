<?php
    require('config.php');

    class Database {
        private $host = HOST;
        private $dbName = DB_NAME;
        private $dbUser = DB_USER;
        private $dbPass = DB_PASS;

        public $pdo;

        public function getConnect(){
            $this->pdo = null;

            try{
                $this->pdo = new PDO("mysql:host=" . $this->host . ";dbname=" . $this->dbName, $this->dbUser, $this->dbPass);
            }catch(PDOException $exception){
                echo "Erro na conexão com banco de dados: " . $exception->getMessage();
            }
            return $this->pdo;
        }
    }
?>