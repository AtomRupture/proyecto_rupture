<?php 

include '.././php/modulos/header-back.php';
error_reporting(0);
$var = $_POST['pro'];
$var2 = $_POST['nomp'];


?>

<!doctype html>
<html lang="en">
<head>
  <title> Registar productos</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v2.1.9/css/unicons.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
  <link rel="shortcut icon" href="./img/unnamed-removebg-preview.svg">
  <script defer type="text/javascript" src="js/app.js"></script>
  <link rel="stylesheet" href="../css/style-admin.css">
  <style>body{height: 100vh !important;}.card-front, .card-back {height: 120% !important; top: -2rem !important;}</style>
</head>
<body>


  
  <div class="section">

    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3">
            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">

                    <div class="section text-center">
                    
                      <form action="./insertar_productos.php" method="post">
                      <h4 class="mb-4 pb-3">Registar productos
                      </h4>
                      <div class="form-group mt-2">
                        <input type="text" class="form-style" name="nombre_p" placeholder="Nombre del producto">
                      </div>
                      <br>
                      <div class="form-group">
                        <input type="text" class="form-style" name="tipo" placeholder="Tipo de producto">
                      </div>
                      <br>
                      <div class="form-group">
                        <input type="number" step="0.01" class="form-style" name="precio" placeholder="Precio">
                      </div>
                      <br>
                      <div class="form-group"> 
                        <input type="number" step="0.01" class="form-style" name="stock" placeholder="Stock">
                      </div>
                      <button type="submit" class="btn mt-4" name="enviar">Registrar</button>
                      </form>

                    </div>

                  </div>
</body>
</html>