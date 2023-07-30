<?php
  session_start();
  if (!isset($_SESSION["id"])){
    header("Location: index.php?msg=need login");
    exit();
}
?>

<head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>

<div class="sid down" style="display: none"><?php echo $_SESSION["id"];?></div>

<a href="#checkout" class="checkout" onclick="document.getElementById('checkout').style.display='block'" style="width:auto;">Odeslat objednávku</a>
    <div id="checkout" class="modal">
                   <form class="modal-content animate" action="/petrbroj/src/src/api/objednavka/create.php" method="POST">
                     <div class="container">
                       <label for="address"><b>Ulice a číslo popisné</b></label>
                       <input class="input-form" id="adresa" type="text" placeholder="Zadej ulici a číslo popisné" name="address" required>

                       <label for="psc"><b>PSČ</b></label>
                       <input class="input-form" id="psc" type="number" placeholder="Zadej PSČ" name="psc" required>

                       <label for="obec"><b>Město</b></label>
                       <input class="input-form" id="obec" type="text" placeholder="Zadej obec" name="obec" required>

                       <label for="email"><b>E-mail</b></label>
                       <input class="input-form" id="email" type="email" placeholder="Zadej e-mail" name="email" required>

                       <label for="phone"><b>Telefonní číslo</b></label>
                       <input class="input-form" id="phone" type="number" placeholder="Zadej telefonní číslo" name="phone" required> 

                       <input class="nav-button" type="submit">Odeslat objednávku</button>

                     </div>
                       <div class="container" style="background-color:#f1f1f1">
                       <button type="button" onclick="document.getElementById('checkout').style.display='none'" class="cancelbtn">Zpět</button>
                     </div>
                   </form>
                 </div>

<script src="./loadForm.js"></script>