<?php 
    class Objednavka {
        private $conn;
        public $Id;
        public $Produkt_Id;
        public $Uzivatele_Id;
        public $DateTime;

        public function __construct($connection, $id, $DateTime){
            $this->conn = $connection;
            $this->Uzivatele_Id = $id;
            $this->$DateTime = $DateTime;
        }
        
        public function create(){
            $query = "INSERT INTO protokolauditu SET Produkt_Id = :Produkt_Id, Uzivatel_Id = :Uzivatele_Id, DatumACas = '$this->DateTime'";
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
            $query = 'SELECT * from protokolauditu WHERE Uzivatele_Id = :Uzivatele_Id';
            $statement = $this->conn->prepare($query);
            $statement->bindParam(':Uzivatele_Id',$this->Uzivatele_Id);
            $statement->execute();
            return $statement;
        }
    }   
?>