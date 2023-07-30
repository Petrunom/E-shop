<?php
require "head.php";
require "nav.php";
/* require "header.php"; */
?>


<div class="row">
<div class="column">
    <div class="hero-image">
      <img src="./produkty/vsechny2.JPG" class="vsechny1" alt="Všechna obuv"  style="width:100%">
      <div class="hero-text">
        <h1>Všechna obuv</h1>
        <button><a href="./vsechny.php">Více...</a></button>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="hero-image">
      <img src="./produkty/damske2.jpg" class="damska1" alt="Dámská obuv"  style="width:100%">
      <div class="hero-text">
        <h1>Dámská obuv</h1>
        <button><a href="./damske.php">Více...</a></button>
      </div>
    </div>
  </div>
  <div class="column">
    <div class="hero-image">
      <img src="./produkty/panske2.JPG" class="panska1" alt="Pánská obuv"  style="width:100%">
      <div class="hero-text">
        <h1>Pánská obuv</h1>
        <button><a href="./panske.php">Více...</a></button>
      </div>
    </div>
  </div>
</div>


    <h1 class="recommended">Doporučené Produkty</h1>
      <hr class="separate">

<!-- Photo Grid -->
<div class="photogrid"> 
  <div class="photos">
    <a class="text-container"><img class="grid-img" style="width:100%"><div class="text" style="display: none"><h1 class="product-name"></h1></div></a>
    <a class="text-container"><img class="grid-img" style="width:100%"><div class="text" style="display: none"><h1 class="product-name"></h1></div></a>
    <a class="text-container"><img class="grid-img" style="width:100%"><div class="text" style="display: none"><h1 class="product-name"></h1></div></a>
  </div>  
  <div class="photos">
    <a class="text-container"><img class="grid-img" style="width:100%"><div class="text" style="display: none"><h1 class="product-name"></h1></div></a>
    <a class="text-container"><img class="grid-img" style="width:100%"><div class="text" style="display: none"><h1 class="product-name"></h1></div></a>
    <a class="text-container"><img class="grid-img" style="width:100%"><div class="text" style="display: none"><h1 class="product-name"></h1></div></a>
  </div>
  <div class="photos">
    <a class="text-container"><img class="grid-img" style="width:100%"><div class="text" style="display: none"><h1 class="product-name"></h1></div></a>
    <a class="text-container"><img class="grid-img" style="width:100%"><div class="text" style="display: none"><h1 class="product-name"></h1></div></a>
    <a class="text-container"><img class="grid-img" style="width:100%"><div class="text" style="display: none"><h1 class="product-name"></h1></div></a>
  </div>
  <div class="photos">
    <a class="text-container"><img class="grid-img" style="width:100%"><div class="text" style="display: none"><h1 class="product-name"></h1></div></a>
    <a class="text-container"><img class="grid-img" style="width:100%"><div class="text" style="display: none"><h1 class="product-name"></h1></div></a>
    <a class="text-container"><img class="grid-img" style="width:100%"><div class="text" style="display: none"><h1 class="product-name"></h1></div></a>
  </div>
</div>


<script src="./showText.js"></script>
<script src="./load.js"></script>


<?php
require "footer.php";
?>
    

		
		