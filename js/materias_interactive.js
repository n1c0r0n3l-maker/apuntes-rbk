document.addEventListener("DOMContentLoaded", () => {
    const checkboxes = document.querySelectorAll(".chk-materia");

    // 1. Cargar estado guardado al iniciar la página
    const aprobadasGuardadas = JSON.parse(localStorage.getItem("materiasAprobadas")) || [];

    checkboxes.forEach(chk => {
        const id = chk.getAttribute("data-id");
        if (aprobadasGuardadas.includes(id)) {
            chk.checked = true;
            chk.closest("tr").classList.add("materia-aprobada");
        }

        // 2. Escuchar cambios para guardar en el "perfil" del usuario
        chk.addEventListener("change", () => {
            const fila = chk.closest("tr");
            
            if (chk.checked) {
                fila.classList.add("materia-aprobada");
            } else {
                fila.classList.remove("materia-aprobada");
            }

            // Actualizar lista de aprobadas en localStorage
            const actualizadas = Array.from(checkboxes)
                .filter(c => c.checked)
                .map(c => c.getAttribute("data-id"));

            localStorage.setItem("materiasAprobadas", JSON.stringify(actualizadas));
        });
    });
});