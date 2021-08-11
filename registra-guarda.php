<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear usuario</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    Crear usuario
                </div>
                <div class="card-body">
                <?php
                require './conexion.php';

                $message = '';

                if (!empty($_POST['email']) && !empty($_POST['password'])) {
            $sql= "INSERT INTO `usuarios`(`id`, `nombre`, `primer_apellido`, `segundo_apellido`, `sexo`, `fecha_nacimiento`, `telefono`, `correo_electronico`, `contrasena`, `calle`, `numero_exterior`, `numero_interior`, `codigo_postal`, `estado_id`, `municipio_id`, `tipo`, `estatus`) VALUES (''$nombre','$primer_apellido','$segundo_apellido','$sexo','$fecha_nacimiento','$numero_celular','$correo_electronico','$contrasena','$calle','$numero_exterior','$numero_interior','$codigo_postal','$estado','$municipio','$perfil','$estatus')";
            $stmt = $conn->prepare($sql);
            $stmt->bindParam(':nombre' = $_POST['nombre']);
            $stmt->bindParam(':primer_apellido' = $_POST['primer_apellido']),};
            $stmt->bindParam(':segundo_apellido' = $_POST['segundo_apellido']);
            $stmt->bindParam(':sexo' = $_POST['sexo']);
            $stmt->bindParam(':fecha_nacimiento' =$_POST['fecha_nacimiento']);
            $stmt->bindParam(':numero_celular' = $_POST['numero_celular']);
            $stmt->bindParam(':correo_electronico' =$_POST['correo_electronico']);
            $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
            $stmt->bindParam(':contrasena' = $password);
            $stmt->bindParam(':calle' = $_POST['calle']);
            $stmt->bindParam(':numero_exterior '= $_POST['numero_exterior']);
            $stmt->bindParam(':numero_interior' = $_POST['numero_interior']);
            $stmt->bindParam(':codigo_postal' = $_POST['codigo_postal']);
            $stmt->bindParam(':estado' = $_POST['estado']);
            $stmt->bindParam(':municipio' = $_POST['municipio']);
            $stmt->bindParam(':perfil' = $_POST['perfil']);
            $stmt->bindParam(':estatus' = $_POST['estatus']);

            if ($stmt->execute()) {
                $message = 'Successfully created new user';
              } else {
                $message = 'Sorry there must have been an issue creating your account';
              }
            }
          ?>
</div>
                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery-3.6.0.min.js"></script>
</body>
</html>