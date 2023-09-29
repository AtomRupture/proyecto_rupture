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
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../../css/css_rutinas/style_pierna.css">
    <script src="../../js/dietas.js"></script>
    <title>Bajar Peso</title>
</head>
<?php include '../modulos/header-af.php' ?>
<body>
 
<section class="secti1">

<div class="secti1-el">
    <div class="b3">
        <div class="contenedor">
        <h1 class="Text_princp">RUTINAS DE PIERNA</h1>
    <div class="btt">
        <h2 class="text_second">Entrena tu pierna con Atom</h2>
    </div>
    <hr class="line-1">
    <div class="bt">
    <a href="#hero-section">
        <button class="emp-ahr" >  
            DESLIZA AHORA
        </button>
    </a>
    </div>
    </div>
</div>

</section>

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<section class="hero-section" id="hero-section">
  <div class="card-grid">
    <a class="card" href="./Recetas/receta1_bajarp.php">
      <div class="card__background" style="background-image: url(../../img/ensalada_tomate.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Perder peso</p>
        <h3 class="card__heading">Ensalada de tomate</h3>
      </div>
    </a>
    <a class="card" href="./Recetas/receta2_bajarp.php">
      <div class="card__background" style="background-image: url(../../img/pollo_receta2.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Perder peso</p>
        <h3 class="card__heading">Pollo al estilo mediterraneo</h3>
      </div>
    </a>
    <a class="card" href="./Recetas/receta3_bajarp.php">
      <div class="card__background" style="background-image: url(../../img/lentejas.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Perder peso</p>
        <h3 class="card__heading">Lentejas guisadas</h3>
      </div>
    </li>
    <a class="card" href="./Recetas/receta4_bajarp.php">
      <div class="card__background" style="background-image: url(../../img/batido.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Perder peso</p>
        <h3 class="card__heading">Batido de manzana verde con kiwi</h3>
      </div>
    </a>
  <div>
</section>



</body>

<?php include '../modulos/footer_def.php'?>

</html>