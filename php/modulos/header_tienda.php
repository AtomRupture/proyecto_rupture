<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://kit.fontawesome.com/49b40f8ce6.js" crossorigin="anonymous"></script>
    <script defer type="text/javascript" src="js/app.js"></script>
    <link rel="stylesheet" href="style_shop.css">
    <title>Tienda</title>
</head>
<body>
<body onscroll="Camb()">
    <header id="headt"> 
           <a href="index.php"> <img src="img/unnamed-removebg-preview.svg" alt="logo" class="logo"></a>
            <button class="a-mu" id="abrir"><i class="fa-solid fa-bars"></i></button>
            <nav class="nav" id="nav">
                <button class="c-mu" id="cerrar"><i class="fa-solid fa-x"></i></button>
            <ul class="nav-list">
                <li><a>Inicio</a></li>
                <li><a>Suplementos</a></li>
                <li><a>Implementos</a></li>

                <div class="search">
    <input type="text" class="search__input" placeholder="Buscar elemento">
    <button class="search__button">
        <svg class="search__icon" aria-hidden="true" viewBox="0 0 24 24">
            <g>
                <path d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z"></path>
            </g>
        </svg>
    </button>
</div>

<div class="icons">
                 <li><a class="b3" onclick=""><img src="img/shop-bag.svg" alt="" class="login"></a></li>
                <li><a class="b2" onclick=""><img src="img/login.svg" alt="" class="login"></a></li>

                </div>

            </ul>

        </nav>
    </header>
</body>
</html>