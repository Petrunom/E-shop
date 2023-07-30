<?php 
require "head.php";
require "nav.php";
?>

<div class="table-row">
    <div class="contacts">
        <h1 class="contacts-logo"><img src="./icon/holysole-bezpozadi.svg" alt="logo"></h1>
        <h1>Kontakty:</h1>
        <h3>Adresa:</h3>
        <a>Město</a><br>
        <a>123 123</a><br>
        <a>Česko</a><br>
        <br><h3>GPS:</h3>
        <a>gps</a><br>
        <br><h3>E-mail:</h3>
        <a>DOE@gmail.com</a><br>
        <br><h3>Tel.:</h3>
        <a>+420 608 999 999</a><br>
        <br><h3>IČO:</h3>
        <a>141321321</a><br>
    </div>
    <div class="contacts">
    <iframe src="https://www.google.com/maps/embed" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
</div>

<?php
require "footer.php";
?>