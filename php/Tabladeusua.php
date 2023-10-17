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
<style>.table{padding: 2rem !important;} body{height: 120vh !important;}</style>
<body class="tabla">
    <?php include '../php/modulos/header-back.php' ?>
    <?php include '../php/conexion.php' ?>
    <div class="main2">
<div class="container_table">
        <div class="table_elements">
            <br>
            <h1 class="med1"> Mostrar usuarios</h1>
            <br>
    <table>
        <tr>
            <th>Id usuario</th>
            <th> nombre</th>
            <th> telefono</th>
            <th> Correo</th>
            <th> pass</th>
            <th> tass</th>
            <th colspan="2"> Botones de acción</th>
        </tr>

        <tbody>
            <?php

                $registro = mysqli_query($conexion, "SELECT * FROM usuarios") or die("Problemas en el select".mysqli_error($conexion));

                while($row = mysqli_fetch_array($registro)){ ?>


                    <tr>
                        <td><?php echo $row['id_usuario']; ?></td>
                        <td><?php echo $row['nombre']; ?></td>
                        <td><?php echo $row['telefono']; ?></td>
                        <td><?php echo $row['correo']; ?></td>
                        <td><?php echo $row['pass']; ?></td>
                        <td><?php echo $row['tipo']; ?></td>

                        <td>
                        <a href="./actualizar.php?edit=<?php echo $row['id_usuario']; ?>"><button class="btn">
                    <span class="material-symbols-outlined">
                        upgrade
                    </span><p>Actualizar</p>
                </button></a>
            </td>


                            </a>
                        </td>

                        <td>
                            <a href="./eliminar.php?del=<?php echo $row['id_usuario']; ?>"><button class="btn">
                            <span class="material-symbols-outlined">
                                delete
                            </span><p>Eliminar</p>
                                </button>
                            </a>
                        </td>
                    </tr>
            <?php


                 }   
?>
            
        </tbody>
    </table>
</div>
</div>
<script src="../js/app.js"></script>