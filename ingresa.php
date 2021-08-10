<?php 

?>
<!DOCTYPE html>
<html lang="es-MX">
<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/robot.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/foundation-sites@6.6.3/dist/css/foundation.min.css" integrity="sha256-ogmFxjqiTMnZhxCqVmcqTvjfe1Y/ec4WaRj/aQPvn+I=" crossorigin="anonymous">
  
    <title>Inicia sesión</title>    
</head>
<body>
    <?php
    require_once './menu.php';
    ?>
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-6">
                <div class="card">
                    <div class="card-header">
                        Inicio de sesión
                    </div>
                    <div class="card-body">
                        <form action="sesion.php" method="post">
                            <div class="mb-3">
                                <label for="correo_electronico" class="form-label">Correo electrónico</label>
                                <input type="email" class="form-control form-control-sm" name="correo_electronico" id="correo_electronico" required>
                            </div>
                            <div class="mb-3">
                                <label for="contrasena" class="form-label">Contraseña</label>
                                <input type="password" class="form-control form-control-sm" name="contrasena" id="contrasena" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-sm">enviar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>