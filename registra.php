<?php
require_once './menu.php';
//$sql="INSERT INTO `usuarios`(`id`, `nombre`, `primer_apellido`, `segundo_apellido`, `sexo`, `fecha_nacimiento`, `telefono`, `correo_electronico`, `contrasena`, `calle`, `numero_exterior`, `numero_interior`, `codigo_postal`, `estado_id`, `municipio_id`, `tipo`, `estatus`) VALUES ('[value-1]','[value-2]','[value-3]','[value-4]','[value-5]','[value-6]','[value-7]','[value-8]','[value-9]','[value-10]','[value-11]','[value-12]','[value-13]','[value-14]','[value-15]','[value-16]','[value-17]')";
require './conexion.php';
?>

<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="shortcut icon" href="img/robot.svg" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.3/css/bulma.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/estilos.css"> 
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
</head>
<body>
<div class="container mt-3">
    <div class="row justify-content-center">
        <div class="col-6">
            <div class="card">
                <div class="card-header">
                    <i class="bi-person-circle"></i> 
 
                </div>
                <div class="card-body">
                    <form method="POST" action="registra.php">
                        <div class="mb-3">
                            <label for="nombre" class="form-label">Nombre (s)</label>
                            <input type="text" name="nombre" required class="form-control form-control-sm" id="nombre" value="<?php echo htmlentities($_POST['nombre'] ?? '') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="primer_apellido" class="form-label">Primer apellido</label>
                            <input type="text" name="primer_apellido" required class="form-control form-control-sm" id="primer_apellido" value="<?php echo htmlentities($_POST['primer_apellido'] ?? '') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="segundo_apellido" class="form-label">Segundo apellido</label>
                            <input type="text" name="segundo_apellido" required class="form-control form-control-sm" id="segundo_apellido" value="<?php echo htmlentities($_POST['segundo_apellido'] ?? '') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="sexo1" class="form-label">Sexo</label>
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo1" value="Femenino" <?php echo 'Femenino' == ($_POST['sexo'] ?? '') ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="sexo1">
                                        Femenino
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="sexo" id="sexo2" value="Masculino" <?php echo 'Masculino' == ($_POST['sexo'] ?? '') ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="sexo2">
                                        Masculino
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="fecha_nacimiento" class="form-label">Fecha de nacimiento</label>
                            <input type="date" name="fecha_nacimiento" required class="form-control form-control-sm" id="fecha_nacimiento" value="<?php echo htmlentities($_POST['fecha_nacimiento'] ?? '') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="numero_celular" class="form-label">Número de teléfono</label>
                            <input type="tel" name="numero_celular" required class="form-control form-control-sm" id="numero_celular" value="<?php echo htmlentities($_POST['numero_celular'] ?? '') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="correo_electronico" class="form-label">Correo electrónico</label>
                            <input type="email" name="correo_electronico" required class="form-control form-control-sm" id="correo_electronico" value="<?php echo htmlentities($_POST['correo_electronico'] ?? '') ?>">
                        </div>
                        
                        <div class="mb-3">
                            <label for="contrasena" class="form-label">Contraseña</label>
                            <input type="password" name="contrasena" class="form-control form-control-sm" id="contrasena" value="<?php echo htmlentities($_POST['contrasena'] ?? '') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="contrasena_confirma" class="form-label">Contraseña (confirma)</label>
                            <input type="password" name="contrasena_confirma" class="form-control form-control-sm" id="contrasena_confirma">
                        </div>
                        <div class="mb-3">
                            <label for="calle" class="form-label">Calle</label>
                            <input type="text" name="calle" required class="form-control form-control-sm" id="calle" value="<?php echo htmlentities($_POST['calle'] ?? '') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="numero_exterior" class="form-label">Numero Exterior</label>
                            <input type="text" name="numero_exterior" required class="form-control form-control-sm" id="numero_exterior" value="<?php echo htmlentities($_POST['numero_exterior'] ?? '') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="numero_interior" class="form-label">Numero Interior</label>
                            <input type="text" name="numero_interior" required class="form-control form-control-sm" id="numero_interior" value="<?php echo htmlentities($_POST['numero_interior'] ?? '') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="codigo_postal" class="form-label">Codigo Postal</label>
                            <input type="text" name="codigo_postal" required class="form-control form-control-sm" id="codigo_postal" value="<?php echo htmlentities($_POST['codigo_postal'] ?? '') ?>">
                        </div>
                        <div class="mb-3">
                            <label for="estado_id" class="form-label">Selecciona estado</label>
                            <select name="estado_id" id="estado_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected value="">Selecciona</option>

                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="municipio_id" class="form-label">Selecciona municipio</label>
                            <select name="municipio_id" id="municipio_id" class="form-select form-select-sm" aria-label=".form-select-sm example">
                                <option selected value="">Selecciona primero un estado</option>
                            </select>
                        </div>
                        <div class="mb-3">
                            <label for="perfil1" class="form-label">Perfil</label>
                            <div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="perfil" id="perfil1" value="Usuario" <?php echo 'Usuario' == ($_POST['Perfil'] ?? '') ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="perfil1">
                                        Usuario 
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="perfil" id="perfil2" value="Empleado" <?php echo 'Empleado' == ($_POST['Perfil'] ?? '') ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="perfil2">
                                        Empleado
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="estatus" class="form-label">Estatus</label>
                            <div>
                                <div class="form-check">
                                <input class="form-check-input" type="radio" name="estatus" id="estatus1" value="Activo" <?php echo 'Activo' == ($_POST['estatus'] ?? '') ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="estatus1">
                                        Activo
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="radio" name="estatus" id="estatus2" value="Inactivo" <?php echo 'Inactivo' == ($_POST['estatus'] ?? '') ? 'checked' : '' ?>>
                                    <label class="form-check-label" for="estatus2">
                                        Inactivo
                                    </label>
                                </div>
                            </div>
                        </div>
                        </div>

                        <button type="submit" class="btn btn-primary">guardar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="js/bootstrap.min.js"></script>
<script>
$(function(){
    $('#estado').change(function() {
        $.getJSON('municipios.php', {estado_id:$(this).val()}, function(data, textStatus, jqXHR) {
            // console.log(data.data);
            var municipios = $('#municipio');
            municipios.html('<option value="">Selecciona</option>')
            data.data.forEach(function (v, i) {
                // console.log(v);
                municipios.append(new Option(v['municipio'], v['id']));
            });
        });
    });
});
</script>
</body>
</html>