<?php 
    class Kosik {
        private $conn;
        public $Id;
        public $Produkt_Id;
        private $Uzivatele_Id;
        public $Count;

        public function __construct($connection, $id){
            $this->conn = $connection;
            $this->Uzivatele_Id = $id;
        }
        
        public function create(){
            $query = 'INSERT INTO kosik SET Produkt_Id = :Produkt_Id, Uzivatele_Id = :Uzivatele_Id';
            $statement = $this->conn->prepare($query);
            $statement->bindParam(':Produkt_Id',$this->Produkt_Id);
            $statement->bindParam(':Uzivatele_Id',$this->Uzivatele_Id);
            if($statement->execute()) 
            {
                return true;
            }
            printf("Error: %s.\n", $statement->error);
            return false;
        }

        public function read(){
            $query = 'SELECT COUNT(produkt.Id) as Count, produkt.Cena, produkt.NazevProduktu, produkt.Velikost, produkt.Vzhled FROM kosik INNER JOIN produkt ON kosik.Produkt_Id = produkt.Id AND kosik.Uzivatele_Id = :Uzivatele_Id GROUP BY produkt.Id';
            $statement = $this->conn->prepare($query);
            $statement->bindParam(':Uzivatele_Id',$this->Uzivatele_Id);
            $statement->execute();
            return $statement;
        }

        public function readIds(){
            $query = 'SELECT * FROM kosik WHERE Uzivatele_Id = :Uzivatele_Id';
            $statement = $this->conn->prepare($query);
            $statement->bindParam(':Uzivatele_Id',$this->Uzivatele_Id);
            $statement->execute();
            return $statement;
        }

        public function delete(){
            $query = 'DELETE FROM kosik WHERE Id = :Id AND Uzivatele_Id = :Uzivatele_Id';
            $statement = $this->conn->prepare($query);
            $statement->bindParam(':Id',$this->Id);
            $statement->bindParam(':Uzivatele_Id',$this->Uzivatele_Id);
            if($statement->execute()) 
            {
                return true;
            }
            printf("Error: %s.\n", $statement->error);
            return false;
        }
    }   
?>