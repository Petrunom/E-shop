<?php
    session_start();
 
    include_once '../../config/Database.php';
    include_once '../../models/Objednavka.php';

    $data = json_decode(file_get_contents("php://input"));

    $database = new Database();
    $conn = $database->connect();

    if (!isset($_SESSION["id"])){
        echo json_encode(
            array('msg' => 0)
        );
        exit();
    }

    $user_id = $data->user_id;

    echo $user_id;

    $objednavka = new Objednavka($conn, $user_id, date('Y-m-d H:i:s'));
    $objednavka->Produkt_Id = $data->product_id;

    if ($objednavka->create()) {
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
