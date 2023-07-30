<?php 
    header('Access-Control-Allow-Origin: *');
    header('Content-Type: application/json');
    header('Access-Control-Allow-Methods: DELETE');
    header('Access-Control-Allow-Headers: Acces-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');

    include_once '../../config/Database.php';
    include_once '../../models/DorucovaciUdaje.php';

    $database = new Database();
    $db = $database->connect();

    $dorucovaciUdaje = new DorucovaciUdaje($db, 12);

    if ($dorucovaciUdaje->delete()) {
        echo json_encode(
            array('msg' => 'Post Deleted')
        );
    }
    else {
        echo json_encode(
            array('msg' => 'Post not Deleted')
        );
    }
?>