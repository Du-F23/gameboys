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
                    require('vendor/autoload.php');
                    use Rakit\Validation\Validator;
                    $validator = new Validator;
                    $validation = $validator->make($_POST, [
                        'nombre' => 'required|min:2|max:50'
                        , 'primer_apellido' => 'required|min:2|max:50'
                        , 'segundo_apellido' => 'required|min:2|max:50'
                        , 'sexo' => 'required|in:Femenino,Masculino'
                        , 'fecha_nacimiento' => 'required|date:Y-m-d'
                        , 'numero_celular' => 'required|min:10|max:15'
                        , 'correo_electronico' => 'required|email'
                        , 'contrasena' => 'required|min:8'
                        , 'perfil' => 'required|in:Administrador,Cliente'
                        , 'estatus' => 'required|in:Activo,Inactiva'
                    ]);
                    $validation->setMessages([
                        'required' => ':attribute es requerido'
                        , 'min' => ':attribute longitud mínima no se cumple'
                        , 'max' => ':attribute longitud máxima no se cumple'
                        , 'in' => ':attribute no está en la lista de valores'
                        , 'email' => ':email debe ser un correo válido'
                    ]);
                    // then validate
                    $validation->validate();
                    if ($validation->fails()) {
                        // handling errors
                        $errors = $validation->errors();
                        echo "<pre>";
                        print_r($errors->firstOfAll());
                        echo "</pre>";
                    } else {
                        require_once './conexion.php';
                        $sql = <<<fin
insert into usuarios
(
    nombre
    , primer_apellido
    , segundo_apellido
    , sexo
    , fecha_nacimiento
    , numero_celular
    , correo_electronico
    , contrasena
    , perfil
    , estatus
) values (
    :nombre
    , :primer_apellido
    , :segundo_apellido
    , :sexo
    , :fecha_nacimiento
    , :numero_celular
    , :correo_electronico
    , :contrasena
    , :perfil
    , :estatus
)
fin;
                        // Encriptamos la contraseña
                        $opciones = [
                            'cost' => 12,
                        ];
                        $contrasena = password_hash($_POST['contrasena'], PASSWORD_BCRYPT, $opciones);
                        $sentencia = $conexion->prepare($sql);
                        $sentencia->bindValue(':nombre', $_POST['nombre'], PDO::PARAM_STR);
                        $sentencia->bindValue(':primer_apellido', $_POST['primer_apellido'], PDO::PARAM_STR);
                        $sentencia->bindValue(':segundo_apellido', $_POST['segundo_apellido'], PDO::PARAM_STR);
                        $sentencia->bindValue(':sexo', $_POST['sexo'], PDO::PARAM_STR);
                        $sentencia->bindValue(':fecha_nacimiento', $_POST['fecha_nacimiento'], PDO::PARAM_STR);
                        $sentencia->bindValue(':numero_celular', $_POST['numero_celular'], PDO::PARAM_STR);
                        $sentencia->bindValue(':correo_electronico', $_POST['correo_electronico'], PDO::PARAM_STR);
                        $sentencia->bindValue(':contrasena', $contrasena, PDO::PARAM_STR);
                        $sentencia->bindValue(':perfil', $_POST['perfil'], PDO::PARAM_STR);
                        $sentencia->bindValue(':estatus', $_POST['estatus'], PDO::PARAM_STR);
                        $sentencia->execute();
                        echo '<h2>Usuario creado</h2>';
                    }
                    ?>
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