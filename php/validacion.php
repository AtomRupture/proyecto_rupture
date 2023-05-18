<?php

include "conexion.php";

if(isset($_POST['enviar'])){

    $correo = $_POST['correo'];
    $pass = $_POST['pass'];

    $admin = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and pass= '$pass' and tipo='admin'");

    $user = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and pass= '$pass' and tipo='user'");


    if(mysqli_num_rows($admin)>0){

        $fila = mysqli_fetch_row($admin);
        $identificador = $fila[0];
        $nombre = $fila[1];
        $correo = $fila[2];
        $pass = $fila[3];
        $tipo = $fila[4]; 

        session_start();
        $_SESSION['id_usuario'] = $identificador;
        $_SESSION['nombre'] = $nombre;
        $_SESSION['correo'] = $correo;
        $_SESSION['pass'] = $pass;
        $_SESSION['tipo'] = $tipo;

        header('location:php/pagina_admin.php');

    }elseif (mysqli_num_rows($user)>0) {
            
            $fila = mysqli_fetch_row($estudiante);
            $identificador = $fila[0];
            $nombre = $fila[1];
            $correo = $fila[2];
            $pass = $fila[3];
            $tipo = $fila[4]; 

            session_start();
            $_SESSION['id_usuario'] = $identificador;
            $_SESSION['nombre'] = $nombre;
            $_SESSION['correo'] = $correo;
            $_SESSION['pass'] = $pass;
            $_SESSION['tipo'] = $tipo;

            header("location:php/pagina_usuario.php");

        }else{
            echo '<script>
        
            alert("Error de autenticacion");
            window.location.href = "login.php";
        
        </script>';

        }

    mysqli_close($conexion);

}

?>