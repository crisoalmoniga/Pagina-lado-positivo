<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = htmlspecialchars($_POST["nombre"]);
    $email = htmlspecialchars($_POST["email"]);
    $telefono = htmlspecialchars($_POST["telefono"]);
    $servicio = htmlspecialchars($_POST["servicio"]);
    $mensaje = htmlspecialchars($_POST["mensaje"]);

    // Configuración del correo
    $to = "contacto@ladopositivo.com.ar";  // Reemplaza con tu dirección de correo
    $subject = "Nuevo mensaje desde Lado Positivo";
    $body = "Nombre: $nombre\nEmail: $email\nTeléfono: $telefono\nServicio: $servicio\nMensaje: $mensaje";
    $headers = "From: $email";

    // Enviar el correo
    if (mail($to, $subject, $body, $headers)) {
        echo "¡Mensaje enviado con éxito!";
    } else {
        echo "Error al enviar el mensaje.";
    }
}
?>
