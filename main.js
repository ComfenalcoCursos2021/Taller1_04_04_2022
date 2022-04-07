let from = document.querySelector("#from1");
let cajaMensaje = document.querySelector(".solucion");

let solucion = async()=>{
    let config = {
        method : from.method,
        body: JSON.stringify({
            num1 : Number(document.querySelector("#num1").value),
            num2 : Number(document.querySelector("#num2").value)
        })
    };
    let peticion = await fetch(from.action, config);
    let res = await peticion.json();
    cajaMensaje.insertAdjacentHTML("beforeend", `<div>Respuesta del servidor: <b>${res.server}</b> ${res.respuesta}</div`);
}
from.addEventListener("submit", (e)=>{
    switch (e.submitter.dataset.accion) {
        case "enviar":
            solucion();
            break;
        case "limpiar":
            cajaMensaje.innerHTML = "";
            from.reset();
            break;
        default:
            cajaMensaje.insertAdjacentHTML("beforeend", `<div>El <b>data-accion='${e.submitter.dataset.accion}'</b> no esta configurada</div>`);
            break;
    }
    e.preventDefault();
})



