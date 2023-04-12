<?php

include "conexion.php";

if(isset($_POST['enviar'])){

    $usuario = $_POST['usuario'];
    $pass = $_POST['pass'];

    $consulta = "SELECT * FROM usuarios WHERE usuario = '$usuario' and pass= '$pass' ";

    $resultado = mysqli_query($conexion,$consulta);

    $fila = mysqli_num_rows($resultado);

    if($fila >0){
        header('location:pagina_user.php');

    }else{
        echo "Problemas para iniciar sesión";

    }

    mysqli_close($conexion);

}


?>