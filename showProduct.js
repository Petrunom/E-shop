const url = "http://localhost/petrbroj/"

const query = window.location.search

const urlParams = new URLSearchParams(query)

const cartBtn = document.querySelector(".cart-btn")

let param = urlParams.get("id")
if (query === "") param = 2

window.addEventListener('load', () => {
    $.ajax({
        type: "GET",
        url: `${url}src/src/api/produkt/readSpecific.php?id=${param}`,
        contentType: "application/json",
        success: function(res){
            console.log(res.data)
            $(".product-name").append(res.data[0].NazevProduktu)
            $(".price").append(`${res.data[0].Cena} Kč`)
            $(".velikost").append(res.data[0].Velikost)
            $(".main-img").attr("src", `./produkty/${res.data[0].Vzhled}`)
            $(".demo-one").attr("src", `./produkty/${res.data[0].Vzhled}`)
        }
    })
})


cartBtn.addEventListener('click', () => {
    $.ajax({
        type: "POST",
        url: `${url}src/src/api/kosik/create.php`,
        contentType: "application/json",
        data: JSON.stringify({ Produkt_Id: param}),
        success: function (res) {
            console.log(res.msg)
            if (res.msg == 0){
                window.location.replace("/petrbroj/index.php?msg=need to be logged in")
            }
          }
    })
})