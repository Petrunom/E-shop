<?php
    class Uzivatel {
        private $conn;
        public $Id;
        public $UserName;
        public $Heslo;
        public $eMail;
        public $TelefonniCislo;
        public $PSC;
        public $Obec;
        public $Adresa;

        public function __construct($connection){
            $this->conn = $connection;
        }

        public function readSpecific(){
            $query = 'SELECT * FROM uzivatel WHERE UserName = :UserName';
            $statement = $this->conn->prepare($query);
            $statement->bindParam(':UserName',$this->UserName);
            $statement->execute();
            return $statement;
        }

        public function readById(){
            $query = 'SELECT * FROM uzivatel WHERE Id = :Id';
            $statement = $this->conn->prepare($query);
            $statement->bindParam(':Id',$this->Id);
            $statement->execute();
            return $statement;
        }

        public function create(){
            $query = 'INSERT INTO uzivatel SET UserName = :UserName, Heslo = :Heslo, eMail = :eMail, TelefonniCislo = :TelefonniCislo, Adresa = :Adresa, Obec = :Obec, PSC = :PSC';
            $statement = $this->conn->prepare($query);
            $this->Heslo = htmlspecialchars(strip_tags($this->Heslo));
            $statement->bindParam(':UserName',$this->UserName);
            $statement->bindParam(':Heslo',$this->Heslo);
            $statement->bindParam(':eMail',$this->eMail);
            $statement->bindParam(':TelefonniCislo',$this->TelefonniCislo);
            $statement->bindParam(':Adresa',$this->Adresa);
            $statement->bindParam(':Obec',$this->Obec);
            $statement->bindParam(':PSC',$this->PSC);
            if($statement->execute()) 
            {
                return true;
            }
            printf("Error: %s.\n", $statement->error);
            return false;
        }


    }
?>