<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" src="img/short-ico.svg"/>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style-admin.css">
    <title> Página mostrar usuarios</title>
</head>
<body class="tabla">
    <?php include '../php/modulos/header-tu.php' ?>

    <div class="container_table">
        <div class="table_elements">
        <table>

            <thead>
                <tr>
                    <td> ID_USUARIO</td>
                    <td> NOMBRE</td>
                    <td> CORREO</td>
                    <td> CONTRASEÑA</td>
                    <td> TIPO USUARIO</td>
                </tr>
            </thead>

            <?php

                include "./conexion.php";

                $consulta = "SELECT * FROM usuarios";
                $resultado = mysqli_query($conexion,$consulta);

                while($mostrar = mysqli_fetch_array($resultado)){

                ?>

                <tr>
                    <td><?php echo $mostrar['id_usuario']; ?></td>
                    <td><?php echo $mostrar['nombre']; ?></td>
                    <td><?php echo $mostrar['correo']; ?></td>
                    <td><?php echo $mostrar['pass']; ?></td>
                    <td><?php echo $mostrar['tipo']; ?></td>
                </tr>
                    
                <?php
                }

            ?>
            </div>
        </table>

    </div>

</body>
</html>

<script src="../js/app.js"></script>