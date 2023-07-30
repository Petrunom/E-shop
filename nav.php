<?php 
    if (!isset($_SESSION["id"])){
      session_start();
  }

?>

<nav>
<div class="navbar">
<a href="index.php"><img src="./icon/holysole-bezpozadi.svg"></a>

<div class="topnav" id="myTopnav">
  <?php
  if (isset($_SESSION["id"])){
    echo '<a href="./src/src/api/uzivatel/logout.php">Logout</a>';
  }
  else{
    echo '<a href="#login" class="login" onclick="document.getElementById(`id01`).style.display=`block`" style="width:auto;">Login</a>
    <div id="id01" class="modal">
                   <form class="modal-content animate" action="./src/src/api/uzivatel/login.php" method="post">
                     <div class="container">
                       <label for="uname"><b>Uživatelské Jméno</b></label>
                       <input class="input-form" type="text" placeholder="Zadej Uživatelské Jméno" name="UserName" required>

                       <label for="psw"><b>Heslo</b></label>
                       <input class="input-form" type="password" placeholder="Zadej Heslo" name="Heslo" required>

                       <button class="nav-button" type="submit">Login</button>
                       <label>
                     </div>
                       <div class="container" style="background-color:#f1f1f1">
                       <button type="button" onclick="document.getElementById(`id01`).style.display=`none`" class="cancelbtn">Cancel</button>
                     </div>
                   </form>
                 </div>
                 <script src="logform.js"></script>';
  }  
  
  ?>
  <a href="./panske.php">Pánské</a>
  <a href="./damske.php">Dámské</a>
  <a href="vsechny.php">Všechna Obuv</a>
  <a href="contacts.php">Kontaky</a>

  <?php 
  if (!isset($_SESSION["id"])){
    echo '<a href="#register" class="register" onclick="document.getElementById(`id02`).style.display=`block`" style="width:auto;">Register</a>
    <div id="id02" class="modal">
                   <form class="modal-content animate" action="/petrbroj/src/src/api/uzivatel/register.php" method="post">
                     <div class="container">
                       <label for="uname"><b>Uživatelské Jméno</b></label>
                       <input class="input-form" type="text" placeholder="Zadej Uživatelské Jméno" name="UserName" required>

                       <label for="pnumber"><b>Telefonní Číslo</b></label>
                       <input class="input-form" type="number" placeholder="Zadej Telefonní Číslo" name="TelefonniCislo" required>

                       <label for="eMail"><b>E-mail</b></label>
                       <input class="input-form" type="email" placeholder="Zadej e-mail" name="eMail" required>

                       <label for="Adresa"><b>Adresa</b></label>
                       <input class="input-form" type="text" placeholder="Zadej Adresu" name="Address" required>

                       <label for="psc"><b>PSČ</b></label>
                       <input class="input-form" type="number" placeholder="Zadej PSČ" name="psc" required>

                       <label for="obec"><b>Obec</b></label>
                       <input class="input-form" type="text" placeholder="Zadej Obec" name="Obec" required>

                       <label for="psw"><b>Heslo</b></label>
                       <input class="input-form" type="password" placeholder="Zadej Heslo" name="Heslo" required>

                       <label for="psw"><b>Potvrď Heslo</b></label>
                       <input class="input-form" type="password" placeholder="Potvrď heslo" name="re-Heslo" required> 

                       <button class="nav-button" type="submit">Registrovat</button>

                     </div>
                       <div class="container" style="background-color:#f1f1f1">
                       <button type="button" onclick="document.getElementById(`id02`).style.display=`none`" class="cancelbtn">Cancel</button>
                     </div>
                   </form>
                 </div>
                 <script src="regform.js"></script>';
  }
    
        ?>
        <a href="./kosik.php"><img src="./icon/shoppingcart.png"></a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
    <img src="./icon/hamburger.svg">
  </a>
    </div>
  </div>
</nav>
<script src="hamburger.js"></script>