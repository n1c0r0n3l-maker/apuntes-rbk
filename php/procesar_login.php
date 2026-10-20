<?php
    // Verificar que los datos vengan por el método POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Capturar datos de forma segura
        $email    = htmlspecialchars($_POST['email'] ?? '');
        $password = $_POST['password'] ?? '';

        // Simular la validación de usuario (comprobar credenciales)
        $success = true; 

        if ($success) {
            $mensajeRespuesta = "¡Bienvenido! Has iniciado sesión exitosamente.";
        } else {
            $mensajeRespuesta = "Lo sentimos, el correo o la contraseña son incorrectos. Por favor, intenta nuevamente.";
        }
    } else {
        // Si alguien intenta ingresar directo a la URL sin enviar el formulario
        $mensajeRespuesta = "Acceso no válido. Por favor, ingresa desde el formulario de inicio de sesión.";
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Apuntes rbk - Inicio de Sesión">
        <link rel="stylesheet" href="css/styles.css" />
        <title>Procesamiento de Inicio de Sesión | Apuntes rbk</title>
    </head>

    <body>
        <!-- Cabecera visible de la página -->
        <header>
            <h1>
                <a href="index.html">Apuntes rbk</a>
            </h1>
        </header>

        <main>
            <section id="resultado-login" class="resultado-login">
                <h2>Resultado del Inicio de Sesión</h2>
                <p><?php echo $mensajeRespuesta; ?></p>
                <a href="index.html" class="button-volver-inicio">Volver al Inicio</a>
            </section>
        </main>

        <footer>
            <p>© 2026 | Apuntes rbk | Todos los derechos reservados</p>
        </footer>
    </body>
</html>