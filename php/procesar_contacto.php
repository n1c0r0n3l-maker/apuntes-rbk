<?php
    // Verificar que los datos vengan por el método POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Capturar datos de forma segura
        $nombre   = htmlspecialchars($_POST['nombre'] ?? '');
        $email    = htmlspecialchars($_POST['email'] ?? '');
        $telefono = htmlspecialchars($_POST['telefono'] ?? '');
        $mensaje  = htmlspecialchars($_POST['mensaje'] ?? '');

        // Simular el guardado de datos o el envío de correo
        $success = true; 

        if ($success) {
            $mensajeRespuesta = "¡Gracias, $nombre! Hemos recibido tu mensaje y te contactaremos pronto.";
        } else {
            $mensajeRespuesta = "Lo sentimos, hubo un problema al procesar tu solicitud. Por favor, intenta nuevamente.";
        }
    } else {
        // Si alguien intenta ingresar directo a la URL sin enviar el formulario
        $mensajeRespuesta = "Acceso no válido. Por favor, envía el formulario de contacto.";
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Apuntes rbk - Procesar Contacto">
        <link rel="stylesheet" href="css/styles.css" />
        <title>Procesamiento de Contacto | Apuntes rbk</title>
    </head>

    <body>
        <!-- Cabecera visible de la página -->
        <header>
            <h1>
                <a href="index.html">Apuntes rbk</a>
            </h1>
        </header>

        <main>
            <section id="resultado-contacto" class="resultado-contacto">
                <h2>Resultado del Contacto</h2>
                <p><?php echo $mensajeRespuesta; ?></p>
                <a href="index.html" class="button-volver-inicio">Volver al Inicio</a>
            </section>
        </main>

        <footer>
            <p>© 2026 | Apuntes rbk | Todos los derechos reservados</p>
        </footer>
    </body>
</html>