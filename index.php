<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/robot.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="/proyecto_integrador/css/bootstrap.min.css">
    <link rel="stylesheet" href="stile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">
  
    <title>Document</title>    
</head>
<body>
  <?php
  require_once './menu.php';
  ?>
   <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="img/among_us.jpeg" class="d-block w-100" alt="Among us">
          </div>
          <div class="carousel-item">
            <img src="img/ats_pc.jpeg" class="d-block w-100" alt="American Truck Simulator">
          </div>
          <div class="carousel-item">
            <img src="img/call_of_duty_warzone.jpg" class="d-block w-100" alt="Call Of Duty Warzone">
          </div>
          <div class="carousel-item">
            <img src="img/gta_v.jpeg" class="d-block w-100" alt="Grand Theft Auto V">
          </div>
          <div class="carousel-item">
            <img src="img/halo.png" class="d-block w-100" alt="Halo 5">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
<span></span>
<div class="conteiner">
  <div class="card" style="width: 18rem;">
    <span>  </span>
    <div class="img8x">
            <img src="img/ats_pc.jpeg" width="10" height="10"  class="d-block w-100" alt="American Truck Simulator">
          <div class="content"> 
            <div>
              <h2>American Truck Simulator</h2>
              <p>American Truck Simulator es un juego de simulador de camiones desarrollado y publicado por la empresa checa SCS Software.</p>
              <p>Se anunció que estaba en desarrollo en septiembre de 2013 y se presentó en el E3 2015. Se lanzó el 2 de febrero de 2016 para Microsoft Windows, Linux y macOS.</p>

            </div>
          </div>
          </div>
        </div>
  </div>
</div>
      <div class="notification">
           <button class="delete"></button> 
   <strong><a href="ingresa.php">Inicia sesion</a></strong>, Si aun no tienes cuenta puedes <strong><a href="registra.php"> Registrarte gratuitamente.</a></strong>
      </div>
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