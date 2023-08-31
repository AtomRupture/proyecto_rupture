<?php 
    include "./conexion.php";

    if (isset($_POST["enviar"])) {

    $nombre_p = $_POST["nombre_p"];
    $tipo = $_POST["tipo"];

    $nombre_p = mysqli_real_escape_string($conexion, $nombre_p);
    $tipo = mysqli_real_escape_string($conexion, $tipo);

    $sql = "INSERT INTO productos(nombre_p, tipo) VALUES ('$nombre_p', '$tipo')";

    if ($resultado) {
        // Mostrar un mensaje de éxito
        echo "El producto fue registrado correctamente.";
      } else {
        // Mostrar un mensaje de error
        echo "Ocurrió un error al registrar el producto: " . mysqli_error($conexion);
      }
    
      // Cerrar la conexión a la base de datos
      mysqli_close($conexion);
    }



    }


?>