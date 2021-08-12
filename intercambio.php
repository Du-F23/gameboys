<?php
  require_once './menu.php';
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/robot.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="/proyecto_integrador/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">
  
    <title>Intercambio de juego</title>    
</head>
<body>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                  <p>Compra de un juego</p>
                </div>
                <div class="card-body">
                    <form method="POST" action="">
                        <div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Vendedor</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="vendedor" >
</div>
<div class="mb-3">
  <label for="formGroupExampleInput" class="form-label">Comprador</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="comprador"> 
</div>
<div class="mb-3">
<label for="formGroupExampleInput" class="form-label">Juego que desea</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="juego_solicitado"> 
</div>
<div class="mb-3">
<label for="formGroupExampleInput" class="form-label">Juego que dara a cambio</label>
  <input type="text" class="form-control" id="formGroupExampleInput" placeholder="" name="juego_propuesto"> 
</div>
<div class="mb-3">
                            <label for="fecha" class="form-label">Fecha que enviara el juego</label>
                            <input type="date" name="fecha" required class="form-control form-control-sm" id="fecha" value="<?php echo htmlentities($_POST['fecha'] ?? '') ?>">
                        </div>
                        <div class="mb-3">
                        <div class="form-check form-switch">
  <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
  <label class="form-check-label" for="flexSwitchCheckDefault">El juego esta aprobado</label>
</div>
</div>
<button type="submit" class="btn btn-primary">Intercambiar</button>
<div class="notification text-center">
  <button class="delete"></button> 
  Si deseas  <strong><a href="comprar.php">Comprar</a></strong>  , o si bien lo deseas puedes <strong><a href="intercambio.php"> Intercambiar algun juego</a></strong> 
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