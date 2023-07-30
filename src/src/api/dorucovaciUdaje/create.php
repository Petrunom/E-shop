<?php
     header('Access-Control-Allow-Origin: *');
     header('Content-Type: application/json');
     header('Access-Control-Allow-Methods: POST');
     header('Access-Control-Allow-Headers: Acces-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
 
    include_once '../../config/Database.php';
    include_once '../../models/DorucovaciUdaje.php';

    $data = json_decode(file_get_contents("php://input"));
    $database = new Database();
    $conn = $database->connect();

    $dorucovaciUdaje = new DorucovaciUdaje($conn, 12);
    $dorucovaciUdaje->PSC = $data->PSC;
    $dorucovaciUdaje->CisloBydliste = $data->CisloBydliste;
    $dorucovaciUdaje->Obec = $data->Obec;
    $dorucovaciUdaje->JmenoAPrijmeni = $data->JmenoAPrijmeni;

    if ($dorucovaciUdaje->create()) {
        echo json_encode(
            array('msg' => 'Post Created')
        );
    }
    else {
        echo json_encode(
            array('msg' => 'Post not Created')
        );
    }

    
  ?>
