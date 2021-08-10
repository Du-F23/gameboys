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
                include './conexion.php';

$nombre = $_POST['nombre'];
$primer_apellido = $_POST['primer_apellido'];
$segundo_apellido = $_POST['segundo_apellido'];
$sexo = $_POST['sexo'];
$fecha_nacimiento =$_POST['fecha_nacimiento'];
$numero_celular = $_POST['numero_celular'];
$correo_electronico =$_POST['correo_electronico'];
$contrasena = $_POST['contrasena'];
$calle = $_POST['calle'];
$numero_exterior = $_POST['numero_exterior'];
$numero_interior = $_POST['numero_interior'];
$codigo_postal = $_POST['codigo_postal'];
$estado = $_POST['estado'];
$municipio = $_POST['municipio'];
$perfil = $_POST['perfil'];
$estatus = $_POST['estatus'];
// The password_hash() function convert the password in a hash before send it to the database
$passHash = password_hash($contrasena, PASSWORD_DEFAULT);

// Query to send Name, Email and Password hash to the database
$query = "INSERT INTO `usuarios`(`id`, `nombre`, `primer_apellido`, `segundo_apellido`, `sexo`, `fecha_nacimiento`, `telefono`, `correo_electronico`, `contrasena`, `calle`, `numero_exterior`, `numero_interior`, `codigo_postal`, `estado_id`, `municipio_id`, `tipo`, `estatus`) VALUES (''$nombre','$primer_apellido','$segundo_apellido','$sexo','$fecha_nacimiento','$numero_celular','$correo_electronico','$contrasena','$calle','$numero_exterior','$numero_interior','$codigo_postal','$estado','$municipio','$perfil','$estatus')";

if (mysqli_query($conn, $query)) {
    echo "<div class='alert alert-success mt-4' role='alert'><h3>Your account has been created.</h3>
    <a class='btn btn-outline-primary' href='login.html' role='button'>Login</a></div>";		
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }	
mysqli_close($conn);
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