let btnPro = document.querySelector(".pro")
let btnPas = document.querySelector(".pas")
let btnAdr = document.querySelector(".adr")
let btnHod = document.querySelector(".hod")
let btnNab = document.querySelector(".nab")
let btnNov = document.querySelector(".nov")
let btnKre = document.querySelector(".kre")

let prof = document.querySelector(".prof")
let pass = document.querySelector(".pass")
let adre = document.querySelector(".adre")
let hodn = document.querySelector(".hodn")
let inze = document.querySelector(".inze")
let odber = document.querySelector(".odber")
let kred = document.querySelector(".kred")

btnPro.addEventListener("click", function () {
    prof.style.display = "block"
    pass.style.display = "none"
    adre.style.display = "none"
    hodn.style.display = "none"
    inze.style.display = "none"
    odber.style.display = "none"
    kred.style.display = "none"
})
btnPas.addEventListener("click", function () {
    prof.style.display = "none"
    pass.style.display = "block"
    adre.style.display = "none"
    hodn.style.display = "none"
    inze.style.display = "none"
    odber.style.display = "none"
    kred.style.display = "none"
})
btnAdr.addEventListener("click", function () {
    prof.style.display = "none"
    pass.style.display = "none"
    adre.style.display = "block"
    hodn.style.display = "none"
    inze.style.display = "none"
    odber.style.display = "none"
    kred.style.display = "none"

})
btnHod.addEventListener("click", function () {
    prof.style.display = "none"
    pass.style.display = "none"
    adre.style.display = "none"
    hodn.style.display = "block"
    inze.style.display = "none"
    odber.style.display = "none"
    kred.style.display = "none"
})
btnNab.addEventListener("click", function () {
    prof.style.display = "none"
    pass.style.display = "none"
    adre.style.display = "none"
    hodn.style.display = "none"
    inze.style.display = "block"
    odber.style.display = "none"
    kred.style.display = "none"
})

btnNov.addEventListener("click", function () {
    prof.style.display = "none"
    pass.style.display = "none"
    adre.style.display = "none"
    hodn.style.display = "none"
    inze.style.display = "none"
    odber.style.display = "block"
    kred.style.display = "none"
})
btnKre.addEventListener("click", function () {
    prof.style.display = "none"
    pass.style.display = "none"
    adre.style.display = "none"
    hodn.style.display = "none"
    inze.style.display = "none"
    odber.style.display = "none"
    kred.style.display = "block"
})