<?php
    include "../conexion.php";

    if (!$conexion) {
        die("Error en la conexión con la base de datos: " . mysqli_connect_error());
    }

    $nombre = mysqli_real_escape_string($conexion, $_POST["nombre"]);
    $correo = mysqli_real_escape_string($conexion, $_POST["correo"]);
    $telefono = mysqli_real_escape_string($conexion, $_POST["telefono"]);

    $nombre_img = $_FILES['archivo']['name'];
    $tipo_img = $_FILES['archivo']['type'];
    $tam_img = $_FILES['archivo']['size'];

    $allowed_types = array("image/jpg", "image/png");

    if ($tam_img <= 2000000 && in_array($tipo_img, $allowed_types)) {
        $carpeta = $_SERVER['DOCUMENT_ROOT'].'/proyecto_rupture/img/user_img';

        if (move_uploaded_file($_FILES['archivo']['tmp_name'], $carpeta.$nombre_img)) {
            $query = "INSERT INTO usuarios (nombre, telefono, correo, img) VALUES ('$nombre', '$telefono', '$correo', '$nombre_img')";
            mysqli_query($conexion, $query) or die("Problemas en el select".mysqli_error($conexion));

            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Se Insertó la imagen correctamente');
                window.location.href='formulario_imagenes.php';
            </script>");
        } else {
            echo ("<script LANGUAGE='JavaScript'>
                window.alert('Ocurrió un error al subir el archivo');
                window.location.href='../user/profile.php';
            </script>");
        }
    } else {
        echo ("<script LANGUAGE='JavaScript'>
            window.alert('Tipo de archivo incorrecto o tamaño excede el límite de 2 MB');
            window.location.href='../user/profile.php';
        </script>");
    }
?>
