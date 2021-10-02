<?php

    class Triangulo{

        //Database
        private $pdo;

        //Colunas Database
        public $id;
        public $base;
        public $altura;
        public $area;
        public $tipoFigura;
    
        
        //Construtor da Conexão
        public function __construct($db){
            $this->pdo = $db;
        }

        //Criar Retângulo
        public function criarTriangulo(){
         
           if($this->base && $this->altura){

                $this->area = ($this->base * $this->altura)/2;
                $this->tipoFigura = 'Triangulo';
                
                $sql = $this->pdo->prepare("INSERT INTO formas_geometricas SET tipo_figura = :tipoFigura, base = :base, altura = :altura, area = :area");
                $sql->bindParam(':tipoFigura', $this->tipoFigura); 
                $sql->bindParam(':base', $this->base);
                $sql->bindParam(':altura', $this->altura);
                $sql->bindParam(':area', $this->area);   
                                             
                if($sql->execute()){
                    return true;
                }
                else
                {
                    return false;
                }   
            
            }
            else
            {
                return false;
            }
        }        

    }

?>