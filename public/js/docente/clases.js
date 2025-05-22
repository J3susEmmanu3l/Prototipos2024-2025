document.addEventListener("DOMContentLoaded", () => {
    const addButton = document.querySelector(".add-button");
    const modal = document.getElementById("modal");
    const agregarModalButton = document.querySelector(".Agregar-btn");
    const classNameInput = document.getElementById("class-name");
    const cerrarModal = document.getElementById("cerrar-modal");
    const contentSection = document.querySelector(".content"); // Contenedor de clases

    abrir.addEventListener("click", () => {
        nav.classList.add("visible");
    });

    cerrar.addEventListener("click", () => {
        nav.classList.remove("visible");
    });

    img.addEventListener("click",()=>{
        nav2.classList.add("visible2")
    })

    cerrar2.addEventListener("click", () => {
        nav2.classList.remove("visible2");
    });

    // Abrir modal al hacer clic en el botón "+"
    addButton.addEventListener("click", (event) => {
        event.preventDefault();
        modal.style.display = "flex"; // Mostrar el modal
    });

    cerrarModal.addEventListener("click", () => {
        modal.style.display = "none"; // ✅ Ahora cierra correctamente
    });

    // Agregar una nueva clase (tarjeta) al hacer clic en "Agregar"
    agregarModalButton.addEventListener("click", () => {
        const className = classNameInput.value.trim();

        if (className !== "") {
            // Crear tarjeta para la nueva clase
            const card = document.createElement("div");
            card.classList.add("card");

            const classTitle = document.createElement("h3");
            classTitle.textContent = `Clase ${className}`;
            card.appendChild(classTitle);

            const description = document.createElement("p");
            description.textContent = "Ver mi clase.";
            card.appendChild(description);

            const VerClase = document.createElement("button");
            VerClase.textContent = "Ver clase";
            VerClase.addEventListener("click", () => {
                window.location.href = "asignaciones.html"
            });
            card.appendChild(VerClase);

            const deleteButton = document.createElement("button");
            deleteButton.textContent = "Eliminar";
            deleteButton.addEventListener("click", () => {
                card.remove(); // Eliminar la tarjeta
            });
            card.appendChild(deleteButton);

            // Añadir la tarjeta al contenedor
            contentSection.appendChild(card);

            // Cerrar el modal y limpiar el campo de entrada
            modal.style.display = "none";
            classNameInput.value = "";
        } else {
            alert("Por favor, introduce un nombre de clase.");
        }
    });
});
