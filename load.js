const url = "http://localhost/petrbroj/"

const productNames = document.querySelectorAll(".product-name")
const products = document.querySelectorAll(".text-container")
const grid_imgs = document.querySelectorAll(".grid-img")

window.addEventListener('load', () => {
    $.ajax({
        type: "GET",
        url: `${url}src/src/api/produkt/read.php`,
        contentType: "application/json",
        success: function(res){
            for (let i = 0; i < 12; i++){
                productNames[i].innerHTML = res.data[i].NazevProduktu
                products[i].setAttribute("href", `./product_page.php?id=${res.data[i].Id}`)
                grid_imgs[i].setAttribute("src", `./produkty/${res.data[i].Vzhled}`)
            }
        }
    })
})