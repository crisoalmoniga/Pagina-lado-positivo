<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];
    $celular = $_POST['celular'];
    $servicio = $_POST['servicio'];
    $mensaje = $_POST['mensaje'];
    $para = "contacto@ladopositivo.com.ar"; // Reemplaza con tu correo real
    $asunto = "Nuevo mensaje de contacto desde Lado Positivo";

    $contenido = "Nombre: " . $nombre . "\n";
    $contenido .= "Email: " . $email . "\n";
    $contenido .= "Celular: " . $celular . "\n";
    $contenido .= "Servicio: " . $servicio . "\n";
    $contenido .= "Mensaje: " . $mensaje . "\n";

    $cabeceras = "From: " . $email . "\r\n";
    $cabeceras .= "Reply-To: " . $email . "\r\n";

    if (mail($para, $asunto, $contenido, $cabeceras)) {
        header("Location: index.html?status=success");
        exit();
    } else {
        header("Location: index.html?status=error");
        exit();
    }
}
?>