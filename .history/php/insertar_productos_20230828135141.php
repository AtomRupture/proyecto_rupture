<?php 
    include "./conexion.php";

    if (isset($_POST["enviar"])) {

    $nombre_p = $_POST["nombre_p"];
    $tipo = $_POST["tipo"];
    $descripcion_p= $_POST['desp'];

    $nombre_p = mysqli_real_escape_string($conexion, $nombre_p);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $descripcion_p = mysqli_real_escape_string($conexion, $descripcion_p);

    $sql = "INSERT INTO productos(nombre_p, tipo) VALUES ('$nombre_p', '$tipo', '$descripcion_p')";

    if ($resultado) {
        echo "<script> alert('El producto se registro correctamente ')</script>";
      }else {
        // Mostrar un mensaje de error
        echo "Ocurrió un error al registrar el producto: " . mysqli_error($conexion);
      }
    
      // Cerrar la conexión a la base de datos
      mysqli_close($conexion);
    
    }


    


?>