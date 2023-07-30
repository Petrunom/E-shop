<?php
    session_start(); 
 
    include_once '../../config/Database.php';
    include_once '../../models/Uzivatel.php';

    $database = new Database();
    $conn = $database->connect();

    $username = $_POST["UserName"];
    $password = $_POST["Heslo"];

    if (!isset($username) && !isset($password)) {
        header("Location: ../../../../index.php?msg=incorrect data");
        exit();
    }

    $uzivatel = new Uzivatel($conn);
    $uzivatel->UserName = $username;
    $result = $uzivatel->readSpecific();

    $id = "";
    $uname = "";
    $pass = "";

    $num = $result->rowCount();      
    if($num > 0) {    
        while($row = $result->fetch(PDO::FETCH_ASSOC)){
            extract($row);
            $uname = $UserName;
            $pass = $Heslo;
            $id = $Id;
        }   
  
    }

    if(password_verify($password, $pass)){
        session_regenerate_id();
        $_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $username;
		$_SESSION['id'] = $id;
        header("Location: ../../../../index.php?msg=success");
        exit();
    } 
    else {
        header("Location: ../../../../index.php?msg=wrong password");
        exit();
    }

    
  ?>
