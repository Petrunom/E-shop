<?php
    session_start();
     header('Access-Control-Allow-Origin: *');
     header('Content-Type: application/json');
     header('Access-Control-Allow-Methods: POST');
     header('Access-Control-Allow-Headers: Acces-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
 
    include_once '../../config/Database.php';
    include_once '../../models/Kosik.php';

    $data = json_decode(file_get_contents("php://input"));
    $database = new Database();
    $conn = $database->connect();

    if (!isset($_SESSION["id"])){
        echo json_encode(
            array('msg' => 0)
        );
        exit();
    }

    $user_id = $_SESSION["id"];

    $kosik = new Kosik($conn, $user_id);
    $kosik->Produkt_Id = $data->Produkt_Id;

    if ($kosik->create()) {
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
