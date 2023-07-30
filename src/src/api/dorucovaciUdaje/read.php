<?php
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/DorucovaciUdaje.php';

    $database = new Database();
    $db = $database->connect();

    // ČÍSLO 12 JE ZDE JEN PRO TESTOVACÍ ÚČELY.
    // BUDE NAHRAZENO ZA SESSION ID, KTERÉ SE BUDE ROVNAT ID UŽIVATELE V DATABÁZI
    $dorucovaciUdaje = new DorucovaciUdaje($db, 12);
    
    $result = $dorucovaciUdaje->readSpecific();

    $num = $result->rowCount();
    
    if($num > 0){
        $main_array = array();
        $main_array['data'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $case_array = array(
                'Id' => $Id,
                'PSC' => $PSC,
                'CisloBydliste' => $CisloBydliste,
                'Obec' => $Obec,
                'JmenoAPrijmeni' => $JmenoAPrijmeni,
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