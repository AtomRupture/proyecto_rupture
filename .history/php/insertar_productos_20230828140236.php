<?php 
    include "./conexion.php";

    if (isset($_POST["enviar"])) {

    $nombre_p = $_POST["nombre_p"];
    $tipo = $_POST["tipo"];
    $descripcion_p= $_POST['desp'];

    $nombre_p = mysqli_real_escape_string($conexion, $nombre_p);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $descripcion_p = mysqli_real_escape_string($conexion, $descripcion_p);

    $sql = "INSERT INTO productos_a(nombre_p, tipo, descripcion_p) VALUES ('$nombre_p', '$tipo', '$descripcion_p')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        echo "<script> alert('El producto se registro correctamente ')</script>";
      }else {

        echo "<script> alert('Ocurrió un error al registrar el producto:')</script>";
      }      
    
      // Cerrar la conexión a la base de datos
      mysqli_close($conexion);

      header('Location: index.php');
    
    }


    


?>