document.addEventListener('DOMContentLoaded', function () {
    
    // ----------------------------------------------------
    // 1. MARCAR EL ENLACE ACTIVO EN EL MENÚ DE NAVEGACIÓN
    // ----------------------------------------------------
    // Esto detecta en qué página estás y le añade una clase 'active' 
    // al enlace correspondiente para que sepas visualmente dónde estás.
    const rutaActual = window.location.pathname.split("/").pop();
    const enlacesMenu = document.querySelectorAll('header nav ul li a');

    enlacesMenu.forEach(enlace => {
        // Si el href del enlace coincide con la página actual
        if (enlace.getAttribute('href') === rutaActual) {
            enlace.classList.add('active');
        }
    });


    // ----------------------------------------------------
    // 2. ACTUALIZAR EL AÑO DEL FOOTER AUTOMÁTICAMENTE
    // ----------------------------------------------------
    // Para que no tengas que cambiar el año (2026) a mano cada 1 de enero.
    const footerCopyright = document.querySelector('footer p');
    if (footerCopyright) {
        const anioActual = new Date().getFullYear();
        // Reemplaza o asegura que el año sea dinámico
        // (Asumiendo que tu texto dice algo como "© 2026 | Apuntes rbk")
        footerCopyright.innerHTML = footerCopyright.innerHTML.replace(/© \d{4}/, `© ${anioActual}`);
    }


    // ----------------------------------------------------
    // 3. MENÚ HAMBURGUESA (Para cuando diseñemos la versión móvil)
    // ----------------------------------------------------
    // Esto prepara el terreno para cuando agrupes tu menú largo en celulares.
    const botonMenu = document.getElementById('menu-toggle'); // ID del botón hamburguesa que crearás en el HTML
    const navMenu = document.querySelector('header nav');

    if (botonMenu && navMenu) {
        botonMenu.addEventListener('click', function () {
            navMenu.classList.toggle('activo');
        });
    }

});