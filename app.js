const nombre = document.getElementById("f_nom")
const ape = document.getElementById("f_ape")
const pass = document.getElementById("password")
const form = document.getElementById("form")
const parrado = document.getElementById("warnings")

form.addEventListener("submit" ,e=>{
    e.preventDefault()
    if(nombre.nodeValue.length <6){
        alert("Nombre muy corto")
    }
})