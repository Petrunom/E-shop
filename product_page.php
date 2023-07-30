<?php 
require "head.php";
require "nav.php";
?>

<div class="product-row">
    <div class="product">
        <div class="product_container">
            <div class="mySlides">
                <div class="numbertext">1 / 3</div>
                <img class="main-img" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">2 / 3</div>
                <img src="./produkty/vsechny.JPG" style="width:100%">
            </div>

            <div class="mySlides">
                <div class="numbertext">3 / 3</div>
                <img src="./produkty/damske2.jpg" style="width:100%">
            </div>
        <!--    <a class="prev" onclick="plusSlides(-1)">❮</a>
            <a class="next" onclick="plusSlides(1)">❯</a> -->

            <div class="caption-container">
            <p id="caption"></p>
            </div>
            <div class="row_prod">
                <div class="column_prod">
                    <img class="demo cursor demo-one" style="width:100%" onclick="currentSlide(1)">
                </div>
              <!--  <div class="column_prod">
                    <img class="demo cursor" src="./produkty/vsechny.JPG" style="width:100%" onclick="currentSlide(2)" alt="ze zadu">
                </div>
                <div class="column_prod">
                    <img class="demo cursor" src="./produkty/damske2.jpg" style="width:100%" onclick="currentSlide(3)" alt="IDK">
                </div> -->
            </div>
        </div>
    


    
    </div>
    <div class="product">
        <div class="product-description">
         <!--   <span href="#panske">Panske>>Znacka</span> --> <!-- Panske a znacka se vezme z databaze popripade damske -->
            <h1 class="product-name"></h1> <!-- Nazev se vezme z databaze -->
            <p>popis produktu</p> <!-- popis produktu se vezme z databaze -->
        </div>
        <div class="product-configuration">
            <div class="product-color"> <!-- z databaze-->
                <span>Barva</span>
                <div class="color-choose">
                    <div>
                        <input id="red" name="color" value="red" type="radio" data-image="red" checked>
                        <label for="red"><span></span></label>
                    </div>
                    <!---<div>
                            <input id="blue" name="color" value="blue" type="radio" data-image="blue" checked>
                            <label for="blue"><span></span></label>
                        </div>
                    -->
                </div>
            </div>
            <div class="product-size"> <!-- klasika databaze -->
                <span>Velikost</span> 
                <div class="size-config">
                    <button class="velikost"></button>
                </div>
            </div>
            <div class="product-price">
                <span class="price"></span>
                <button class="cart-btn">Přidat do košíku</button>
            </div>
        </div>

    </div>
</div>


<script src="./product.js"></script>
<script src="./showProduct.js"></script>
<?php
require "footer.php";
?>