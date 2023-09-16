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
<img src="img/rutinas/personaje_frontal.svg" usemap="#image-wrap" id="img_change" alt="">
</div>

<map name="image-wrap">
    <area shape="poly" coords="481,587,471,571,468,552,468,538,468,525,471,510,477,495,481,481,491,468,500,461,509,455,517,460,528,461,545,461,564,467,567,482,563,495,551,506,542,520,536,535,533,548,519,563,509,574,497,581" href="index.php" alt="">
</map>

<? 
    include 'php/modulos/footer_def.php';
?>

<script src="js/rutinas.js"></script>

</body>
</html>