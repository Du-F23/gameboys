<?php
require './menu.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/proyecto_integrador/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Georama:ital,wght@1,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/estilos.css">
    <title>Venta e Intercambio</title>
</head>
<body>
<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
    <img src="img/ats_banner.png" width="10" height="10"  class="d-block w-100" alt="American Truck Simulator"> 
      <div class="card-body">
      <h5 class="card-title">American Truck Simulator</h5>
    <p class="card-text">American Truck Simulator es un juego de simulador de camiones desarrollado y publicado por la empresa checa SCS Software.</p>
              <p>Se anunció que estaba en desarrollo en septiembre de 2013 y se presentó en el E3 2015. Se lanzó el 2 de febrero de 2016 para Microsoft Windows, Linux y macOS.</p>
      </div>
      <div class="card-footer">
      <a href="src/american_truck.php" class="btn btn-primary">Ir al juego</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="img/au_banner.jpg" class="d-block w-100" alt="Among us">
      <div class="card-body">
        <h5 class="card-title">Among Us</h5>
        <p class="card-text">Among Us es un juego de deducción social multijugador en línea de 2018 desarrollado y publicado por el estudio de juegos estadounidense Innersloth. </p>
        <p>Se lanzó en dispositivos iOS y Android en junio de 2018 y en Windows en noviembre de 2018, con juego multiplataforma entre estas plataformas.</p>
      </div>
      <div class="card-footer">
      <a href="src/amongus.php" class="btn btn-primary">Ir al juego</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="img/warzone_banner.jpg" class="d-block w-100" alt="Call Of Duty Warzone">
      <div class="card-body">
        <h5 class="card-title">Call of Duty: Warzone</h5>
        <p class="card-text">Call of Duty: Warzone es un videojuego de Battle Royale gratuito lanzado el 10 de marzo de 2020 para PlayStation 4, Xbox One, Microsoft Windows, PlayStation 5 y Xbox Series X / S. </p>
        <p>El juego es parte de Call of Duty: Modern Warfare de 2019 y está conectado a Call of Duty: Black Ops: Cold War de 2020 y se presentó durante la temporada 2 del contenido de Modern Warfare.</p>
      </div>
      <div class="card-footer">
      <a href="src/warzone.php" class="btn btn-primary">Ir al juego</a>
      </div>
    </div>
  </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
    <img src="img/gta_banner.jpg" class="d-block w-100" alt="Grand Theft Auto V">
      <div class="card-body">
      <h5 class="card-title">Grand Theft Auto V</h5>
    <p class="card-text">Grand Theft Auto V es un juego de acción y aventuras de 2013 desarrollado por Rockstar North y publicado por Rockstar Games.</p>
    <p>Es la primera entrada principal de la serie Grand Theft Auto desde Grand Theft Auto IV de 2008.</p>
      </div>
      <div class="card-footer">
      <a href="src/gtav.php" class="btn btn-primary">Ir al juego</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="img/halo.jpeg" class="d-block w-100" alt="Halo 5">
      <div class="card-body">
        <h5 class="card-title">Halo 5</h5>
        <p class="card-text">Halo 5: Guardians es un videojuego de disparos en primera persona de 2015 desarrollado por 343 Industries y publicado por Microsoft Studios para Xbox One.</p>
        <p>La quinta entrada principal y la décima en general en la serie Halo, se lanzó en todo el mundo el 27 de octubre de 2015.</p>
      </div>
      <div class="card-footer">
      <a href="src/halo5.php" class="btn btn-primary">Ir al juego</a>
      </div>
    </div>
  </div>
  <div class="col">
    <div class="card h-100">
    <img src="img/rocket.jpeg" class="d-block w-100" alt="Rocket League">
      <div class="card-body">
        <h5 class="card-title">Rocket League </h5>
        <p class="card-text">Rocket League es un videojuego de fútbol vehicular desarrollado y publicado por Psyonix.</p>
        <p>El juego se lanzó por primera vez para Microsoft Windows y PlayStation 4 en julio de 2015, y los puertos para Xbox One y Nintendo Switch se lanzarán más adelante.</p>
      </div>
      <div class="card-footer">
      <a href="src/rocket.php" class="btn btn-primary">Ir al juego</a>
      </div>
    </div>
  </div>
</div>
<div class="notification text-center">
  <button class="delete"></button> 
Si deseas <strong><a href="comprar.php">Comprar</a></strong>, o si bien lo deseas puedes <strong><a href="registra-juego.php"> Intercambiar algun juego</a></strong>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
</body>
</html>