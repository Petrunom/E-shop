<?php
    session_start();
     header('Access-Control-Allow-Origin: *');
     header('Content-Type: application/json');
     header('Access-Control-Allow-Methods: DELETE');
     header('Access-Control-Allow-Headers: Acces-Control-Allow-Headers, Content-Type, Access-Control-Allow-Methods, Authorization, X-Requested-With');
 
    include_once '../../config/Database.php';
    include_once '../../models/Kosik.php';

    $data = json_decode(file_get_contents("php://input"));
    $database = new Database();
    $conn = $database->connect();


    $user_id = $data->user_id;

    $kosik = new Kosik($conn, $user_id);
    $kosik->Id = $data->Id;

    if ($kosik->delete()) {
        echo json_encode(
            array('message' => 'Post Deleted')
        );
    }
    else {
        echo json_encode(
            array('message' => 'Post not Deleted')
        );
    }

    
  ?>
