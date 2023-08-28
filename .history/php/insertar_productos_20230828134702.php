<?php 
    include "./conexion.php";

    if (isset($_POST["enviar"])) {

    $nombre_p = $_POST["nombre_p"];
    $tipo = $_POST["tipo"];

    $pro = mysqli_real_escape_string($conexion, $pro);
    $nomp = mysqli_real_escape_string($conexion, $nomp);



    }


?>