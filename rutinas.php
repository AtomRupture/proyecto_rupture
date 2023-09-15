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
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_rutinas.css">
    <link rel="shortcut icon" href="./img/unnamed-removebg-preview.svg">
    <link rel="stylesheet" href="css/style-responsive.css">
    <title>Atom rupture</title>
</head>
<body>

<?php include './php/modulos/header.php' ?>

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
<img src="img/rutinas/personaje_frontal.svg"  id="img_change" alt="">
</div>

<? 
    include 'php/modulos/footer_def.php';
?>

<script src="js/rutinas.js"></script>

</body>
</html>