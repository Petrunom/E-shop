<?php
session_start();
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/Kosik.php';

    $database = new Database();
    $db = $database->connect();

    if (!isset($_SESSION["id"])){
        echo json_encode(
            array('msg' => 0)
        );
        exit();
    }
    
    $user_id = $_SESSION["id"];

    $kosik = new kosik($db, $user_id);
    
    $result = $kosik->read();

    $num = $result->rowCount();
    
    if($num > 0){
        $main_array = array();
        $main_array['data'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $case_array = array(
                'Cena' => $Cena,
                'NazevProduktu' => $NazevProduktu,
                'Velikost' => $Velikost,
                'Vzhled' => $Vzhled,
                'Count' => $Count

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