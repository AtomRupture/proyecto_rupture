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
    <link rel="stylesheet" href="../../css/style-i.css">
    <link rel="stylesheet" href="../../css/style-responsive.css">
    <style>
    .secti1{background: linear-gradient(0deg, rgba(0, 0, 0, 0.4), rgba(0, 0, 0, 0.4)),url(../../img/hombro.jpg) no-repeat center center !important;
      background-size: cover !important;}</style>
    <script src="../../js/dietas.js"></script>
    <title>Hombro</title>
</head>
<?php include '../modulos/header-af.php' ?>
<body>
 
<section class="secti1">

<div class="secti1-el">
    <div class="b3">
        <div class="contenedor">
        <h1 class="Text_princp">RUTINAS DE HOMBRO</h1>
    <div class="btt">
        <h2 class="text_second">Entrena tu hombro con Atom</h2>
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
    <a class="card" href="../user/programa_rutinas/hombro_mancuerna.php">
      <div class="card__background" style="background-image: url(../../img/hombro_mancuerna.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Hombro</p>
        <h3 class="card__heading">Hombro con mancuerna</h3>
      </div>
    </a>
    <a class="card" href="../user/programa_rutinas/hombro_maq.php">
      <div class="card__background" style="background-image: url(../../img/hombro_maq.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Hombro</p>
        <h3 class="card__heading">Hombro con máquinas</h3>
      </div>
    </a>
    <a class="card" href="../user/programa_rutinas/hombro_polea.php">
      <div class="card__background" style="background-image: url(../../img/hombro_polea.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Hombro</p>
        <h3 class="card__heading">Hombro con poleas</h3>
      </div>
    </li>
    <a class="card" href="hombro.php">

    </a>
  <div>
</section>



</body>

<?php include '../modulos/footer_def.php'?>

</html>