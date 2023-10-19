<?php
session_start();
error_reporting(0);

// Incluye el archivo de conexión a la base de datos
include "../conexion.php";

// Verificar si el usuario ha iniciado sesión
if(isset($_SESSION['nombre']) && isset($_SESSION['correo']) && isset($_SESSION['telefono'])) {
    $nombre = $_SESSION['nombre'];
    $correo = $_SESSION['correo'];
    $telefono = $_SESSION['telefono'];

    // Verificar si se ha enviado un formulario de actualización
    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        // Verificar si se seleccionó un archivo
        if(isset($_FILES['archivo']) && $_FILES['archivo']['error'] === UPLOAD_ERR_OK) {
            $nombre_imagen = $_FILES['archivo']['name'];
            $tipo_imagen = $_FILES['archivo']['type'];
            $tamano_imagen = $_FILES['archivo']['size'];
            $ruta_temporal = $_FILES['archivo']['tmp_name'];

            // Verificar el tipo de archivo
            $allowed_types = array("image/jpg", "image/jpeg", "image/png");
            if(in_array($tipo_imagen, $allowed_types)) {
                // Mover el archivo a la ubicación deseada
                $ruta_destino = "../../img/user_img/" . $nombre_imagen;
                if(move_uploaded_file($ruta_temporal, $ruta_destino)) {
                    // Actualizar la imagen en la base de datos
                    $query = "UPDATE usuarios SET img='$nombre_imagen' WHERE correo='$correo'";
                    mysqli_query($conexion, $query) or die("Error al actualizar la información en la base de datos.");

                    echo "Se ha actualizado la imagen correctamente.";
                } else {
                    echo "Error al mover el archivo.";
                }
            } else {
                echo "El tipo de archivo no es válido.";
            }
        }

        // Actualizar el nombre, el teléfono y el correo
        $nombre_actualizado = $_POST['nombre'];
        $telefono_actualizado = $_POST['telefono'];
        $correo_actualizado = $_POST['correo'];
        $pass_actual = $_POST['pass_actual'];
        $nueva_contrasena = $_POST['nueva_contrasena'];

        // Verificar si la contraseña actual es válida
        $query = "SELECT pass FROM usuarios WHERE correo='$correo'";
        $resultado = mysqli_query($conexion, $query);
        if($row = mysqli_fetch_assoc($resultado)) {
            $pass_guardado = $row['pass'];
            if(password_verify($pass_actual, $pass_guardado)) {
                // La contraseña ingresada es correcta
                // Verificar si la nueva contraseña y la confirmación coinciden
                $confirmar_contrasena = $_POST['confirmar_contrasena'];
                if($nueva_contrasena === $confirmar_contrasena) {
                    // Encriptar la nueva contraseña
                    $pass_encriptado = password_hash($nueva_contrasena, PASSWORD_DEFAULT);

                    // Actualizar la contraseña en la base de datos
                    $query = "UPDATE usuarios SET nombre='$nombre_actualizado', telefono='$telefono_actualizado',
                        correo='$correo_actualizado', pass='$pass_encriptado' WHERE correo='$correo'";
                    mysqli_query($conexion, $query) or die("Error al actualizar la información en la base de datos.");

                    echo "Se ha actualizado la información correctamente.";
                } else {
                    echo "La nueva contraseña y la confirmación no coinciden.";
                }
            } else {
                echo "La contraseña actual es incorrecta.";
            }
        } else {
            echo "No se encontró la contraseña en la base de datos.";
        }
    }
} else {
    echo "Debe iniciar sesión para acceder a esta página.";
}

// Cerrar la conexión a la base de datos
mysqli_close($conexion);
?>


<!DOCTYPE html>
<html lang="es-co">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil de usuario</title>
    <link rel="stylesheet" href="../../css/style_profile.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<style>.btn-outline-primary {color: white !important;border-color: #E40b0b !important; border-radius: 1rem; transition: .5s !important;} .btn-outline-primary:hover {background-color: #E40b0b; } .pro_img{max-width: 100rem; border-radius: 50%; max-height: 8rem; width: 7.5rem;} .pb-2{padding: 2rem 0rem 0rem 0rem !important;}</style>
<body>

<?php include '../modulos/header-af.php' ?>

    <div class="container light-style flex-grow-1 container-p-y">
        <h4 class="font-weight-bold py-3 mb-4">

        </h4>
        <div class="card overflow-hidden">
            <div class="row no-gutters row-bordered row-border-light">
                <div class="col-md-3 pt-0">
                    <div class="list-group list-group-flush account-settings-links">
                        <a class="list-group-item list-group-item-action active" data-toggle="list"
                            href="#account-general">General</a>
                        <a class="list-group-item list-group-item-action" data-toggle="list"
                            href="#account-change-password">Cambiar contraseña</a>
                    </div>
                </div>
                
                <form class="col-md-9" action="" method="post" enctype="multipart/form-data">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="account-general">
                            <div class="card-body media align-items-center">
                            <img class="pro_img" src="../../img/user_img/<?php echo "$nombre_imagen"?>" alt class="../../img/login.svg">
                                <div class="media-body ml-4">
                                    <label>
                                        Subir nueva foto
                                        <input type="file" name="archivo" class="btn btn-outline-primary">
                                    </label> &nbsp;
                                    <div class="text-light small mt-1">JPG o PNG con un tamaño máximo de 2MB</div>
                                </div>
                            </div>
                            <hr class="border-light m-0">
                            <div class="card-body">
                            <div class="form-group">
                            <label class="form-label">Usuario</label>
                            <input type="text" class="form-control mb-1" name="nombre" value="<?php echo isset($_POST['nombre']) ? $_POST['nombre'] : $_SESSION['nombre']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Correo</label>
                            <input type="text" class="form-control" name="correo" value="<?php echo isset($_POST['correo']) ? $_POST['correo'] : $_SESSION['correo']; ?>">
                        </div>
                        <div class="form-group">
                            <label class="form-label">Teléfono</label>
                            <input type="text" class="form-control mb-1" name="telefono" value="<?php echo isset($_POST['telefono']) ? $_POST['telefono'] : $_SESSION['telefono']; ?>">
                        </div>

                        <div class="tab-pane fade" id="account-change-password">
                            <div class="card-body pb-2">
                                <div class="form-group">
                                    <label class="form-label">Contraseña actual</label>
                                    <input type="pass_actual" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Contraseña nueva</label>
                                    <input type="password" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Confirmar contraseña</label>
                                    <input type="password" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-right mt-3">
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>&nbsp;
                        <a href="./user_index.php"><button type="button" class="btn btn-default">Cancelar</button></a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script>
    <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.0/dist/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript">

    </script>
</body>

</html>
