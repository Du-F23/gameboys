<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/robot.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="/proyecto_integrador/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">
  
    <title>Información</title>    
</head>
<body>
<?php
    require_once './menu.php';
    ?>

<a href="https://web.telegram.org"><img src="img/telegram.png" class="rounded float-start" alt="Telegram"  width="50" height="50">Telegram <p></p></a>
<a href="https://www.instagram.com/"><img src="img/instagram.png" class="rounded float-end" alt="Instagram"width="50" height="50">Instagram <p></p></a>
<a href="https://mail.google.com/"><img src="img/email.png" class="rounded float-start" alt="correo" width="50" height="50">Correo Electronico<p></p></a>

<p>Tambien puedes encontrarnos en la siguiente ubicación</p>
<center><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3764.6607278846577!2d-99.47962168570984!3d19.340522986936683!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d20a14878a64eb%3A0x65bdb503fdce37bc!2sUniversidad%20Tecnol%C3%B3gica%20del%20Valle%20de%20Toluca!5e0!3m2!1ses-419!2smx!4v1628303924395!5m2!1ses-419!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></center>


<div class="notification">
  <button class="delete"></button>
  Podemos asesorarte mandando un correo a 
   <strong>gameboys@adventure.com</strong>, una vez que nos llegue la notificación trataremos de atender de inmediato a cada una de sus dudas. <strong>Recuerde ser amable con cada uno de nuestros empleados. </strong> Gracias.
</div>
      <script  src="js/bootstrap.min.js"></script>
      <script src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js" integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o=" crossorigin="anonymous"></script>
      <script>document.addEventListener('DOMContentLoaded', () => {
  (document.querySelectorAll('.notification .delete') || []).forEach(($delete) => {
    const $notification = $delete.parentNode;

    $delete.addEventListener('click', () => {
      $notification.parentNode.removeChild($notification);
    });
  });
});</script>
</body>

</html>