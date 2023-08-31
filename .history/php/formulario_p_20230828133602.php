<?php 

include '../php/modulos/header-tu.php';
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
                      <form action="./pagina_admin.php" method="post">
                    
                      <h4 class="mb-4 pb-3">Registar productos
                      </h4>
                      <div class="form-group mt-2">
                        <input type="number" class="form-style" name="pro" placeholder="N° del producto">
                      </div>
                      <div class="form-group">
                        <input type="text" class="form-style" name="nomp" placeholder="Nombre del producto">
                      </div>
                      <button type="submit" class="btn mt-4" name="enviar">Registrar</button>
                      </form>

                    </div>

                  </div>
</body>
</html>