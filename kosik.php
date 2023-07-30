<?php
    session_start();
    if (!isset($_SESSION["id"])){
        header("Location: index.php?msg=need login");
        exit();
    }
    require "head.php";
    require "nav.php";
    //require "header.php";
?>

<div class="produkty down">
    
</div>
<a class="cart-btn" href="./checkout.php">Objednat</a>
<script src="./kosik.js"></script>

<?php 
require "footer.php"
?>