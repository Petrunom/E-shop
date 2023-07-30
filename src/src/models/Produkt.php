<?php
    class Produkt {
        private $conn;
        public $Id;
        public $Cena;
        public $NazevProduktu;
        public $Znacka;
        public $Velikost;
        public $Barva;
        public $RokVydani;
        public $Material;
        public $Kategorie;
        public $Vzhled;

        public function __construct($connection){
            $this->conn = $connection;
        }

        public function read(){
            $query = 'SELECT * FROM produkt';
            $statement = $this->conn->prepare($query);
            $statement->execute();
            return $statement;
        }

        public function readSpecific(){
            $query = 'SELECT * FROM produkt WHERE id = :id';    
            $statement = $this->conn->prepare($query);
            $statement->bindParam(':id', $this->Id);
            $statement->execute();
            return $statement;
        }

        public function readDamske(){
            $query = 'SELECT * FROM produkt WHERE Kategorie = "Damske"';    
            $statement = $this->conn->prepare($query);
            $statement->execute();
            return $statement;
        }

        public function readPanske(){
            $query = 'SELECT * FROM produkt WHERE Kategorie = "Panske"';    
            $statement = $this->conn->prepare($query);
            $statement->execute();
            return $statement;
        }
    }
?>