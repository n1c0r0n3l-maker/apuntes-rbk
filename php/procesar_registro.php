<?php
    // Verificar que los datos vengan por el método POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Capturar datos sanitizando las entradas de texto
        $nombre       = htmlspecialchars($_POST['nombre'] ?? '');
        $email        = htmlspecialchars($_POST['email'] ?? '');
        $password     = $_POST['password'] ?? '';
        $confirmation = $_POST['confirmation'] ?? '';
        $edad         = isset($_POST['edad']) ? intval($_POST['edad']) : 0;

        // Validación básica: comprobar que las contraseñas coincidan
        if (!empty($password) && $password === $confirmation) {
            // Simulación de guardado exitoso
            // En un sistema real, aquí encriptarías la contraseña: password_hash($password, PASSWORD_BCRYPT)
            $success = true;
            $mensajeRespuesta = "¡Gracias, $nombre! Te has registrado exitosamente en Apuntes rbk.";
        } else {
            $success = false;
            $mensajeRespuesta = "Lo sentimos, las contraseñas no coinciden o hubo un problema al procesar tu registro. Por favor, intenta nuevamente.";
        }
    } else {
        // Si alguien intenta ingresar directo a la URL sin enviar el formulario
        $mensajeRespuesta = "Acceso no válido. Por favor, completa el formulario de registro.";
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="Apuntes rbk - Confirmación de Registro">
        <link rel="stylesheet" href="css/styles.css" />
        <title>Procesamiento de Registro | Apuntes rbk</title>
    </head>

    <body>
        <!-- Cabecera visible de la página -->
        <header>
            <h1>
                <a href="index.html">Apuntes rbk</a>
            </h1>
        </header>

        <main>
            <section id="resultado-registro" class="resultado-registro">
                <h2>Resultado del Registro</h2>
                <p><?php echo $mensajeRespuesta; ?></p>
                <a href="index.html" class="button-volver-inicio">Volver al Inicio</a>
            </section>
        </main>

        <footer>
            <p>© 2026 | Apuntes rbk | Todos los derechos reservados</p>
        </footer>
    </body>
</html>