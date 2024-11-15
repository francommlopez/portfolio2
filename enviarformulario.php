<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $telefono = htmlspecialchars($_POST["telefono"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    $para = "correo@ejemplo.com"; // Cambia a tu correo electrónico
    $asunto = "Consulta desde el formulario de contacto";
    $contenido = "Nombre: $nombre\nCorreo: $email\nTeléfono: $telefono\nMensaje:\n$mensaje";
    $encabezados = "From: $email";

    if (mail($para, $asunto, $contenido, $encabezados)) {
        echo "Gracias por tu mensaje. Nos pondremos en contacto contigo pronto.";
    } else {
        echo "Lo siento, hubo un problema al enviar tu mensaje. Inténtalo de nuevo.";
    }
} else {
    echo "Acceso denegado.";
}
?>
