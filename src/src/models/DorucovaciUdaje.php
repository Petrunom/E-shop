<?php 
    class DorucovaciUdaje {
        private $conn;
        public $Id;
        public $PSC;
        public $Adresa;
        public $Obec;
        private $Uzivatel_Id;

        public function __construct($connection, $id){
            $this->conn = $connection;
            $this->Uzivatel_Id = $id;
        }

        public function readSpecific(){
            $query = 'SELECT * FROM dorucovaciudaje WHERE Uzivatel_Id = :Uzivatel_Id';
            $statement = $this->conn->prepare($query);
            $statement->bindParam(':Uzivatel_Id',$this->Uzivatel_Id);
            $statement->execute();
            return $statement;
        }

        public function create(){
            $query = 'INSERT INTO dorucovaciudaje SET PSC = :PSC, Adresa = :Adresa, Obec = :Obec, JmenoAPrijmeni = :JmenoAPrijmeni, Uzivatel_Id = :Uzivatel_Id';
            $statement = $this->conn->prepare($query);
            $statement->bindParam(':PSC',$this->PSC);
            $statement->bindParam(':Adresa',$this->Adresa);
            $statement->bindParam(':Obec',$this->Obec);
            $statement->bindParam(':Uzivatel_Id',$this->Uzivatel_Id);
            if($statement->execute()) 
            {
                return true;
            }
            printf("Error: %s.\n", $statement->error);
            return false;
        }

        public function update(){
            $query = 'UPDATE dorucovaciudaje SET PSC = :PSC, Adresa = :Adresa, Obec = :Obec, JmenoAPrijmeni = :JmenoAPrijmeni WHERE Uzivatel_Id = :Uzivatel_Id';
            $statement = $this->conn->prepare($query);
            $statement->bindParam(':PSC',$this->PSC);
            $statement->bindParam(':Adresa',$this->Adresa);
            $statement->bindParam(':Obec',$this->Obec);
            $statement->bindParam(':Uzivatel_Id',$this->Uzivatel_Id);
            if($statement->execute()) 
            {
                return true;
            }
            printf("Error: %s.\n", $statement->error);
            return false;
        }

        public function delete() {
            $query = 'DELETE FROM dorucovaciudaje WHERE Uzivatel_Id = :Uzivatel_Id';

            $statement = $this->conn->prepare($query);

            $statement->bindParam(':Uzivatel_Id', $this->Uzivatel_Id);

            if($statement->execute()) {
                return true;
            }

            printf("Error: %s.\n", $statement->error);

            return false;
        }
    }   
?>