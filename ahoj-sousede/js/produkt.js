let btnPopis = document.querySelector(".x")
let btnRecenze = document.querySelector(".y")
let btnVideo = document.querySelector(".z")

let popis = document.querySelector(".popis2")
let recenze = document.querySelector(".hodn")
let video = document.querySelector(".video")

btnPopis.addEventListener("click", function (){
    popis.style.display = "block"
    recenze.style.display = "none"
    video.style.display = "none"
})
btnRecenze.addEventListener("click", function (){
    popis.style.display = "none"
    recenze.style.display = "block"
    video.style.display = "none"
})
btnVideo.addEventListener("click", function (){
    popis.style.display = "none"
    recenze.style.display = "none"
    video.style.display = "block"
})