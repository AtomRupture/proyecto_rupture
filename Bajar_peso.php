<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_bajar.css">
    <script src="js/dietas.js"></script>
	
    
    <title>Bajar Peso</title>
</head>
<?php include './php/modulos/header.php' ?>
<body>
 
<section class="secti1">

<div id="overlay">
    
    <video class="visible-desktop" id="hero-vid" poster="./video/video_bajarp.mp4" autoplay loop muted>
        <source type="video/webm" src="./video/video_bajarp.mp4"></source>
        <source type="video/mp4" src="./video/video_bajarp.mp4"></source>
    </video>
    <div id="state" class="visible-desktop"><span class="fa fa-pause"></span></div>
    <img id="hero-pic" class="hidden-desktop" src="https://www.markhillard.com/sandbox/media/polina.jpg" alt="">
</div>
</section>

<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">

<section class="hero-section">
  <div class="card-grid">
    <a class="card" href="./Recetas/receta1_bajarp.php">
      <div class="card__background" style="background-image: url(./img/ensalada_tomate.jpg)"></div>
      <div class="card__content">
        <p class="card__category">Bajar peso</p>
        <h3 class="card__heading">Ensalada de tomate</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557187666-4fd70cf76254?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </a>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1556680262-9990363a3e6d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </li>
    <a class="card" href="#">
      <div class="card__background" style="background-image: url(https://images.unsplash.com/photo-1557004396-66e4174d7bf6?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=800&q=60)"></div>
      <div class="card__content">
        <p class="card__category">Category</p>
        <h3 class="card__heading">Example Card Heading</h3>
      </div>
    </a>
  <div>
</section>



</body>

<?php include './php/modulos/footer_def.php'?>

</html>