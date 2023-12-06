<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $mensaje = $_POST["mensaje"];
  
    $destinatario = "joanfpg2002@gmail.com"; // Reemplaza esto con la dirección de correo a la que deseas enviar el mensaje.
    $asunto = "Mensaje desde el formulario de contacto";
  
    $mensaje_correo = "Nombre: $nombre\n";
    $mensaje_correo .= "Correo electrónico: $correo\n";
    $mensaje_correo .= "Telefono: $telefono\n";
    $mensaje_correo .= "Mensaje:\n$mensaje";
  
    // Envía el correo electrónico
    if (mail($destinatario, $asunto, $mensaje_correo)) {
      $enviado = true;
    } else {
      $enviado = false;
    }
  
    if ($enviado) {
      // Si el correo se envió con éxito, muestra un mensaje HTML.
      ?>
      <!DOCTYPE html>
      <html>
      <head>
        <title>Envío Exitoso</title>
      </head>
      <body>
        <h1>¡Mensaje enviado con éxito!</h1>
        <p>Gracias por ponerte en contacto con nosotros. Tu mensaje ha sido enviado.</p>
  
        <br>
        <h2>Contacto: </h2>
        <p>+51 986113262</p>
  
        <br>
        <a href="/"> volver a pododinamic.pe/</a>
      </body>
      </html>
      <?php
    } else {
      // Si hubo un error en el envío del correo, muestra un mensaje de error.
      ?>
      <!DOCTYPE html>
      <html>
      <head>
        <title>Error en el Envío</title>
      </head>
      <body>
        <h1>Error en el envío</h1>
        <p>Hubo un problema al enviar tu mensaje. Por favor, intenta de nuevo más tarde.</p>
  
        <br>
        <h2>Contacto: </h2>
        <p>+51 986113262</p>
  
        <br>
        <a href="/"> volver a pododinamic.pe</a>
      </body>
      </html>
      <?php
    }
  }
  ?>