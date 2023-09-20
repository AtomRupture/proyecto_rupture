<?php

    session_start();
    error_reporting(0);

    $varsesion = $_SESSION['nombre'];

    if($varsesion == null || $varsesion = ''){
        echo "No tiene permiso para ingresar";
        die();
    }

?>

<!DOCTYPE html>
<html lang="es-co">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/49b40f8ce6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/style_rutinas.css">
    <link rel="shortcut icon" href="../../img/unnamed-removebg-preview.svg">
    <link rel="stylesheet" href="../../css/style-responsive.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Atom rupture</title>
</head>
<body>

<?php include '../modulos/header-af.php' ?>

<div class="container">
    <div class="pane">
        <label class="label" id="frontal">
            <span>Frontal</span>
            <input id="left" class="input" name="radio" type="radio">
        </label>
        <label class="label" id="trasero">
            <span>Trasero</span>
            <input id="middle" class="input" checked="checked" name="radio" type="radio">
        </label>
        <span class="selection"></span>
    </div>
</div>

<div class="personaje">
<img src="../../img/rutinas/personaje_frontal.svg" class="map" id="img_change" alt="" usemap="#human">
</div>

<map name="human">

    <area shape="rect" coords="53,377,110,480" title="bicep" href="" alt="">
    <area shape="rect" coords="390,377,447,480" title="bicep" href="" alt="">
    <area shape="rect" coords="376,250,457,350" title="hombro" href="" alt="">
    <area shape="rect" coords="45,250,118,350" title="hombro" href="" alt="">
    <area shape="rect" coords="190,385,310,550" title="abdomen" href="" alt="">
    <area shape="rect" coords="140,275,350,380" title="pecho" href="" alt="">
    <area shape="rect" coords="15,510,80,660" title="antebrazo" href="" alt="">


</map>

<!---     
<div class="button-p">
    <i class="fa-solid fa-dumbbell"></i>
</div>
-->


<script type="text/javascript">

    let Imgfrontal = document.getElementById("frontal");
    let ImgTrasera = document.getElementById("trasero");
    let CambioImg = document.getElementById("img_change");

    Imgfrontal.onclick = function(){
        CambioImg.src = "../../img/rutinas/personaje_frontal.svg";
    }

    ImgTrasera.onclick = function(){
        CambioImg.src = "../../img/rutinas/personaje_espalda.svg";
    }

</script>

<!--- LIBRERÍAS JQUERY PARA LA SELECCIÓN DE LOS MÚSCULOS -->
<script type="text/javascript" src="../../js/jquery-3.7.1.min.js"></script>
<script type="text/javascript" src="../../js/jquery.maphilight.min.js"></script>

<!--- UTILIZACIÓN DE LA LIBRERÍA MAPHILIGHT PARA EL HOVER -->
<script type="text/javascript">
        $.fn.maphilight.defaults = {
	stroke: true,
	strokeColor: 'ff0000',
	strokeOpacity: 4,
	strokeWidth: 5.5,
}

    $('.map').maphilight()

</script>
        
</body>
</html>