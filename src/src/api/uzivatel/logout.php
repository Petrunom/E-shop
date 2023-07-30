<?php

session_start();

unset($_SESSION["loggedin"]);

unset($_SESSION["id"]);

unset($_SESSION["name"]);

$BackToMyPage = $_SERVER['/petrboj/index.php'];
if(isset($BackToMyPage)) {
    header('Location: '.$BackToMyPage);
} else {
    header('Location: /petrbroj/index.php'); // default page
}
   

?>
