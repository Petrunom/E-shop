const url = "http://localhost/petrbroj/"

const orderBtn = document.querySelector(".nav-button")

window.addEventListener('load', () => {
    $.ajax({
        type: "GET",
        url: `${url}src/src/api/uzivatel/readById.php`,
        contentType: "application/json",
        success: function(res){
            const data = res.data[0]
            document.querySelector("#obec").value = data.Obec
            document.querySelector("#psc").value = data.PSC
            document.querySelector("#adresa").value = data.Adresa
            document.querySelector("#email").value = data.eMail
            document.querySelector("#phone").value = data.TelefonniCislo
        }
    })

    $(".modal-content").submit(function (event) {
        $.ajax({
            type: "GET",
            url: `${url}src/src/api/kosik/readIds.php`,
            contentType: "application/json",
            success: function(res){
                for (let i = 0; i < res.data.length; i++){
                    const postData = {
                        user_id: document.querySelector(".sid").innerHTML,
                        product_id: res.data[i].Produkt_Id,
                        Id: res.data[i].Id
                      }
                    $.ajax({
                        type: "POST",
                        url: `${url}src/src/api/objednavka/create.php`,
                        data: JSON.stringify(postData),
                        contentType: "application/json",
                        encode: true,
                      }).done(function (data) {
                        $.ajax({
                            type: "DELETE",
                            url: `${url}src/src/api/kosik/delete.php`,
                            data: JSON.stringify(postData),
                            contentType: "application/json",
                            encode: true,
                          }).done(function (data) {
                            console.log(data);
                          })
                    })
                }
                document.location.replace("./index.php")
            }
        })
    
        event.preventDefault();
      })
})