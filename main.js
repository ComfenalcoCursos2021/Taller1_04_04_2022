let from = document.querySelector("#from1");
let cajaMensaje = document.querySelector(".solucion");

let solucion = async()=>{
    let config = {
        method : "POST",
        body: JSON.stringify({
            num1 : document.querySelector("#num1").value,
            num2 : document.querySelector("#num2").value
        })
    };
    let peticion = await fetch("ejercicio1.php", config);
    let data = await peticion.text();
    cajaMensaje.insertAdjacentText("beforeend", data);
}
from.addEventListener("submit", (e)=>{
    solucion();
    e.preventDefault();
})



