const url = "http://localhost/petrbroj/"

window.addEventListener('load', () => {
    $.ajax({
        type: "GET",
        url: `${url}src/src/api/kosik/read.php`,
        contentType: "application/json",
        success: function(res){
            for(let i = 0; i < res.data.length; i++){
                $(".produkty").append(`<div class="produkt"><img style="width: 16rem; height: 16rem" src="./produkty/${res.data[i].Vzhled}"></img>
                    <div class="nazev">${res.data[i].NazevProduktu}</div>
                    <div class="count">Počet: ${res.data[i].Count}x</div>
                    <div class="cena">Cena: ${res.data[i].Cena} Kč</div>
                    <div class="Velikost">Velikost: ${res.data[i].Velikost}</div>
                </div>`)
            }
        }
    })
})