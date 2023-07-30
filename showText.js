const texts = document.querySelectorAll(".text")
const imgs = document.querySelectorAll(".grid-img")
const containers = document.querySelectorAll(".text-container")

for (let i = 0; i < containers.length; i++){
    containers[i].addEventListener('mouseover', (event) => {
        texts[i].style.display = "block"
        imgs[i].style.filter = "brightness(25%)"
    })

    containers[i].addEventListener('mouseout', (event) => {
        texts[i].style.display = "none"
        imgs[i].style.filter = "brightness(100%)"
    })
}
