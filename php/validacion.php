<?php

//este codigo permite validar el ingreso del login a una plataforma

include "conexion.php";

if(isset($_POST['enviar'])){

    $correo = $_POST['correo'];
    $pass = $_POST['pass'];


    $admin = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and pass= '$pass' and tipo = 'admin'");
    $user = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' and pass= '$pass' and tipo = 'user'");

    if(mysqli_num_rows($admin)> 0){

        $fila = mysqli_fetch_row($admin);
        $ced = $fila[0];
        $name = $fila[1];
        $telefono = $fila[2];
        $correo = $fila[3];
        $pass = $fila[4];
        $tipo = $fila[5];
        session_start();
        $_SESSION['id_usuario'] = $ced;
        $_SESSION['nombre'] = $name;
        $_SESSION['telefono'] = $telefono;
        $_SESSION['correo'] = $correo;
        $_SESSION['pass'] = $pass;
        $_SESSION['tipo'] = $tipo;

        header('location:pagina_admin.php');
    }elseif(mysqli_num_rows($user)>0){

            $fila = mysqli_fetch_row($user);
            $ced = $fila[0];
            $name = $fila[1];
            $telefono = $fila[2];
            $correo = $fila[3];
            $pass = $fila[4];
            $tipo = $fila[5];
            session_start();
            $_SESSION['id_usuario'] = $ced;
            $_SESSION['nombre'] = $name;
            $_SESSION['telefono'] = $telefono;
            $_SESSION['correo'] = $correo;
            $_SESSION['pass'] = $pass;
            $_SESSION['tipo'] = $tipo;

            header('location:user/user_index.php');

        }else{
            echo "<script>
                alert('Problemas para iniciar sesión');
                location.replace('../login.php');
            </script>";
        }

    mysqli_close($conexion);

}


?>