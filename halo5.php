<?php
require_once './menu.php';
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="shortcut icon"
      href="proyecto_integrador/img/robot.svg"
      type="image/x-icon"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css"
      integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I="
      crossorigin="anonymous"
    />
    <title>Halo 5</title>
  </head>
  <body>
    <img
      src="/proyecto_integrador/img/HALO2.jpg"
      class="img-fluid"
      alt="halo"
    />
    <div class="card-body">
      <h5 class="card-title">Halo 5</h5>
      <p class="card-text">
      Halo 5 Guardians es un videojuego de disparos en primera persona de la popular saga de videojuegos Halo exclusivo para la consola Xbox One
      </p>
      <p>
      Salió el 27 de octubre de 2015 desarrollado por 343 Industries y publicado por Microsoft Studios. El juego sigue la línea argumental de Halo 4.
      </p>
    </div>
    <div class="notification text-center">
      <button class="delete"></button>
      <strong><a href="/proyecto_integrador/ingresa.php">Inicia sesion</a></strong
      >, Si aun no tienes cuenta puedes
      <strong><a href="/proyecto_integrador/registra.php"> Registrarte gratuitamente.</a></strong>
    </div>
    <script src="/proyecto_integrador/js/bootstrap.min.js"></script>
    <script
      src="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/js/foundation.min.js"
      integrity="sha256-pRF3zifJRA9jXGv++b06qwtSqX1byFQOLjqa2PTEb2o="
      crossorigin="anonymous"
    ></script>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        (document.querySelectorAll(".notification .delete") || []).forEach(
          ($delete) => {
            const $notification = $delete.parentNode;

            $delete.addEventListener("click", () => {
              $notification.parentNode.removeChild($notification);
            });
          }
        );
      });
    </script>
    <script
      src="https://code.jquery.com/jquery-3.6.0.min.js"
      integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
      crossorigin="anonymous"
    ></script>
  </body>
</html>