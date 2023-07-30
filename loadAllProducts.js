const url = "http://localhost/petrbroj/"

const photos = document.querySelectorAll(".photos")

window.addEventListener('load', () => {
    $.ajax({
        type: "GET",
        url: `${url}src/src/api/produkt/read.php`,
        contentType: "application/json",
        success: function(res){
            let temp = 0
            console.log(res.data)
            for (let i = 0; i < res.data.length; i++){
                if (temp % 4 == 0) temp = 0
                photos[temp].innerHTML += `<a class="text-container" href="./product_page.php?id=${res.data[i].Id}"><img class="grid-img" src="./produkty/${res.data[i].Vzhled}" style="width:100%"><div class="text" style="display: none"><h1 class="product-name">${res.data[i].NazevProduktu}</h1></div></a>
                <div class="name">${res.data[i].NazevProduktu}<div>`
                temp++
            }
        }
    })
})