<?php
    class DB {
        private $HOST = "localhost";
        private $DB = "equipamentos_db";
        private $USERNAME = "root";
        private $PASSWORD = "";

        public $conn;

        public function Connect(){
            $this->conn = null;
            try{
                $this->conn = new PDO("mysql:host=" . $this->HOST .
                 "DBname=" . $this->DB, $this->USERNAME, $this->PASSWORD);
                $this->conn->exec("set names utf8");
            }catch(PDOException $exception){
                echo "Erro ao conectar: " . $exception->getMessage();
            }
            return $this->conn;
        }
    }
?>
