<?php

    class Soma{
        //Database
        private $pdo;

        //Colunas Database
        public $area;

        public $somarPoligonos;
            
        //Construtor da Conexão
        public function __construct($db){
            $this->pdo = $db;
        }

        public function somaPoligonos(){

            //$sql = $this->pdo->prepare("SELECT SUM(area) as somaPoligonos FROM formas_geometricas");
            $sql = $this->pdo->prepare("SELECT SUM(area) AS somaPoligonos FROM formas_geometricas");

            $sql->execute();
            
            $row = $sql->fetch(); 
            

            $this->somarPoligonos = $row['somaPoligonos'];
            
            if($sql->execute()){
                return true;

            }else {
                return false;
            }
        }
    }

?>