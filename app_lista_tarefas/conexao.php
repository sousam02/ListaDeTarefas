<?php
    class conexao{
        private $host = 'localhost';
        private $dbname = 'php_com_pdo';
        private $user = 'root';
        private $pass = '58256606';

        public function conectar(){
            try{
                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->pass"
                );

                return $conexao;
            } catch(PDOException $e){
                echo $e->getMessage();
            }
        }
    }



?>