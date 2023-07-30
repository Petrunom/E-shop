<?php
session_start();
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');

    include_once '../../config/Database.php';
    include_once '../../models/Produkt.php';

    $database = new Database();
    $db = $database->connect();

    $produkt = new Produkt($db);

    $productId = 2;

    if (isset($_GET["id"])) $productId = $_GET["id"];

    $produkt->Id = $productId;
    $result = $produkt->readSpecific();

    $num = $result->rowCount();
    
    if($num > 0){
        $main_array = array();
        $main_array['data'] = array();

        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);

            $case_array = array(
                'Id' => $Id,
                'Cena' => $Cena,
                'NazevProduktu' => $NazevProduktu,
                'Znacka' => $Znacka,
                'Velikost' => $Velikost,
                'Barva' => $Barva,
                'RokVydani' => $RokVydani,
                'Material' => $Material,
                'Kategorie' => $Kategorie,
                'Vzhled' => $Vzhled

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