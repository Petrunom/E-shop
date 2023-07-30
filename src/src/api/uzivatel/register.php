<?php
    session_start();
    include_once '../../config/Database.php';
    include_once '../../models/Uzivatel.php';

    $database = new Database();
    $conn = $database->connect();

    $password = $_POST['Heslo'];
    $re_password = $_POST['re-Heslo'];
    if($password == $re_password)
    {
    $uzivatel = new Uzivatel($conn);
    $uzivatel->UserName = $_POST["UserName"];
    $uzivatel->Heslo = password_hash($_POST["Heslo"], PASSWORD_DEFAULT);
    $uzivatel->eMail = $_POST["eMail"];
    $uzivatel->TelefonniCislo = $_POST["TelefonniCislo"];
    $uzivatel->PSC = $_POST["psc"];
    $uzivatel->Adresa = $_POST["Address"];
    $uzivatel->Obec = $_POST["Obec"];
    $uzivatel->create();
    }


    

    header("Location: /petrbroj/index.php");
    exit;
?>



