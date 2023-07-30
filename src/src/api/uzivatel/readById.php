<?php
session_start();
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/Uzivatel.php';

    $database = new Database();
    $db = $database->connect();

    $uzivatel = new Uzivatel($db);

    $user_id = $_SESSION["id"];

    $uzivatel->Id = $user_id;
    
    $result = $uzivatel->readById();

    $num = $result->rowCount();
    
    if($num > 0){
        $main_array = array();
        $main_array['data'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $case_array = array(
                'Id' => $Id,
                'UserName' => $UserName,
                'eMail' => $eMail,
                'TelefonniCislo' => $TelefonniCislo,
                'PSC' => $PSC,
                'Adresa' => $Adresa,
                'Obec' => $Obec

            );

            array_push($main_array['data'], $case_array);
        }

        echo json_encode($main_array);
    }
    else {
        echo json_encode(
            array('message' => 'no records found')
        );
    }