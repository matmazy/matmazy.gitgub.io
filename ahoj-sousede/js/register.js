let btnA = document.querySelector(".a button")
let btnB = document.querySelector(".b button")

let a = document.querySelector(".a")
let b = document.querySelector(".b")
let c = document.querySelector(".c")


btnA.addEventListener("click", function () {

    a.style.display = "none"
    b.style.display = "block"
    c.style.display = "none"

})
btnB.addEventListener("click", function () {
    a.style.display = "none"
    b.style.display = "none"
    c.style.display = "block"

})