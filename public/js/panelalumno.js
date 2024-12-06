document.addEventListener("DOMContentLoaded", () => {
    const nav = document.querySelector("#nav");
    const abrir = document.querySelector("#abrir");
    const cerrar = document.querySelector("#cerrar");

    abrir.addEventListener("click", () => {
        nav.classList.add("visible");
    });

    cerrar.addEventListener("click", () => {
        nav.classList.remove("visible");
    });

    /* SE AGREGA EL ID DE LA IMAGEN Y DEL BOTON CERRAR 2 PARA QUE PUEDAS ABRIR Y CERRAR EL MENU
    No es necesario declarar variables para asingar los id, con llamar a los id directamente es suficiente
    pero hazlo como se te haga mas facil*/
    img.addEventListener("click",()=>{
        nav2.classList.add("visible2")
    })

    cerrar2.addEventListener("click", () => {
        nav2.classList.remove("visible2");
    });
});
