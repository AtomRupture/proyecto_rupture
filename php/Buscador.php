<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="../css/style-admin.css">
    <title>Document</title>
</head>
<body>

    <?php include './modulos/header-tu.php'?>
<div class="main_container">
<div class="sub_container">
<form action="./Buscador.php" method="post" id="foxr">

<input type="search" name="dato" placeholder="Ingrese el nombre a buscar">
<br><br><br><br>
<input type="submit" name="buscador" value="Buscar" class="boton">

</form>
</div>
</div>

<center>
<?php


include "conexion.php";
if (isset($_POST['buscador'])) {
    $buscar = $_POST ['dato'];

    if(empty ($buscar)){
        echo "Ingrese un dato, el campo esta vacio";

    }else{
?>
<section class="st1">
    <?php
        $consulta = "SELECT * FROM usuarios WHERE nombre LIKE '%".$buscar."%'";
        $mostrar = mysqli_query($conexion, $consulta);
        $var_total = mysqli_num_rows($mostrar);

        if($row = mysqli_fetch_array($mostrar)) {

            echo "Los resultados para esta busqueda son: $buscar";

            echo "<br>";

            echo "el total de datos fueron: $var_total";

            echo "<br>";
            echo "<br>";
            
            echo "<hr>";

            ?>

            <?php
            
            do{
             ?>
                <br>
                <tr> <td> <?php echo $row['nombre']; ?> </td> </tr>
                <tr> <td> <?php echo $row['tipo']; ?> </td> </tr>
                <hr>



                <?php
            }
            
            while ($row = mysqli_fetch_array($mostrar));
            
            
            while ($row = mysqli_fetch_array($mostrar));
            

        }else{
            echo "No hay datos para esta busqueda: $buscar";
        }
    }
}

?>
</section>
</center>

</body>
</html>

<script src="../js/app.js"></script>