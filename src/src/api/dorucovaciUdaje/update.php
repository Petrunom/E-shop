<?php 
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: PUT');
    header('Access-Control-Allow-Headers: Acces-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once '../../config/Database.php';
    include_once '../../models/DorucovaciUdaje.php';

    $database = new Database();
    $db = $database->connect();

    $dorucovaciUdaje = new DorucovaciUdaje($db, 12);

    $data = json_decode(file_get_contents("php://input"));

    $dorucovaciUdaje->PSC = $data->PSC;
    $dorucovaciUdaje->CisloBydliste = $data->CisloBydliste;
    $dorucovaciUdaje->Obec = $data->Obec;
    $dorucovaciUdaje->JmenoAPrijmeni = $data->JmenoAPrijmeni;
    

    if ($dorucovaciUdaje->update()) {
        echo json_encode(
            array('msg' => 'Post Updated')
        );
    }
    else {
        echo json_encode(
            array('msg' => 'Post not Updated')
        );
    }
?>