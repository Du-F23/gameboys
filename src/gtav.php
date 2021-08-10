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
    <title>American Truck Simulator</title>
  </head>
  <body>
    <img
      src="/proyecto_integrador/img/ats_pc.jpeg"
      class="img-fluid"
      alt="American Truck Simulator"
    />
    <div class="card-body">
      <h5 class="card-title">American Truck Simulator</h5>
      <p class="card-text">
        American Truck Simulator es un juego de simulador de camiones
        desarrollado y publicado por la empresa checa SCS Software.
      </p>
      <p>
        Se anunció que estaba en desarrollo en septiembre de 2013 y se presentó
        en el E3 2015. Se lanzó el 2 de febrero de 2016 para Microsoft Windows,
        Linux y macOS.
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