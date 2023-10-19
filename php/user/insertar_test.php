<?php

    session_start();
    error_reporting(0);

    $varsesion = $_SESSION['nombre'];
    $varsesioncorreo = $_SESSION['correo'];
    $varsesiontelefono = $_SESSION['telefono'];

    if($varsesion == null || $varsesion = ''){
        echo "No tiene permiso para ingresar";
        die();
    }

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
                    $ruta_destino = "../../img/user_img" . $nombre_imagen;
                    if(move_uploaded_file($ruta_temporal, $ruta_destino)) {
                        // Actualizar la imagen y otros datos del usuario en la base de datos
                        $query = "UPDATE usuarios SET img='$nombre_imagen', nombre='$nombre', telefono='$telefono' WHERE correo='$correo'";
                        mysqli_query($conexion, $query) or die("Error al actualizar la información en la base de datos.");

                        // La imagen se subió y se guardó correctamente
                        echo "Imagen subida y guardada exitosamente.";
                    } else {
                        echo "Error al mover el archivo.";
                    }
                } else {
                    echo "Tipo de archivo no admitido.";
                }
            } else {
                echo "No se seleccionó ningún archivo.";
            }
        }
    } else {
        echo "Debe iniciar sesión para acceder a esta página.";
    }

    // Cerrar la conexión a la base de datos
    mysqli_close($conexion);

?>

<form action="" method="post" enctype="multipart/form-data">
                <input type="file" name="archivo">
                <input type="submit" value="Subir Imagen">
            </form>

                         
