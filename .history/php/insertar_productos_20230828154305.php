<?php 
    include "./conexion.php";

    if (isset($_POST["enviar"])) {

    $nombre_p = $_POST["nombre_p"];
    $tipo = $_POST["tipo"];
    $precio= $_POST['precio'];

    $nombre_p = mysqli_real_escape_string($conexion, $nombre_p);
    $tipo = mysqli_real_escape_string($conexion, $tipo);
    $precio = mysqli_real_escape_string($conexion, $precio);

    $sql = "INSERT INTO productos_a(nombre_p, tipo, precio) VALUES ('$nombre_p', '$tipo', '$precio')";

    $resultado = mysqli_query($conexion, $sql);

    if ($resultado) {
        echo "<script> alert('El producto se registro correctamente ')</script>";
      }else {

        echo "<script> alert('Ocurrió un error al registrar el producto:')</script>";
      }      
    
      // Cerrar la conexión a la base de datos
      mysqli_close($conexion);

      echo "<script> window.history.go (-2)</script>";
    
    }


    


?>