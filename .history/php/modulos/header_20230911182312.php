<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://kit.fontawesome.com/49b40f8ce6.js" crossorigin="anonymous"></script>
    <script defer type="text/javascript" src="js/app.js"></script>
    <title>Header</title>
</head>
<?php 

include "./php/conexion.php";

?>
<body>
<body onscroll="Camb()">
    <header id="headt"> 
           <a href="index.php"> <img src="img/unnamed-removebg-preview.svg" alt="logo" class="logo"></a>
            <button class="a-mu" id="abrir"><i class="fa-solid fa-bars"></i></button>
            <nav class="nav" id="nav">
                <button class="c-mu" id="cerrar"><i class="fa-solid fa-x"></i></button>
            <ul class="nav-list">
                <li><a class="clases" href="clases.php">Clases</a></li>
                <li><a>Planes</a></li>
                <li><a>Rutinas</a></li>
                <li><a>Dietas</a></li>
                <li><a class="tienda" href="tienda.php">Tienda</a></li>
                <li><button onclick="enviar_form()" class="bo"><p>Comience ya!</p></button></li>
                <li><a class="b2" onclick=""><img src="img/login.svg" alt="" class="login"></a></li>
                <div class="sub-menu-warp">
                    <div class="sub-menu">
                        <div class="user-info">
                            <img src="img/login.svg">
                            <h2>Iniciar sesion</h2>
                        </div>
                    </div>
                </div>
            </ul>
            </nav>
    </header>
</body>
</html>