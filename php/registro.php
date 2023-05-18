<?php

    include "conexion.php";

    $nombre = $_POST['nombre'];
    $telefono = $_POST['telefono'];
    $correo = $_POST['correo'];
    $pass = $_POST['pass'];
    $tipo = 'user';

    $insertar = "INSERT INTO usuarios(nombre,telefono,correo,pass,tipo) VALUES('$nombre','$telefono','$correo','$pass','$tipo')";

    $verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

    if(mysqli_num_rows($verificar_usuario)> 0){
        echo '<script>
        
            alert ("El usuario ya está registrado");
            window.history.go(-1);

        </script>';
        exit();
    }

    $resultado = mysqli_query($conexion,$insertar);

    if($resultado){
        echo '<script>
        
            alert("Datos insertados correctamente");
            window.location="";
        
        </script>';

    }else{
        echo "Problemas al insertar los datos";
    }


    mysqli_close($conexion);

?>