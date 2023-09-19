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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://kit.fontawesome.com/49b40f8ce6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/49b40f8ce6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <style>
            
        header{
            display: flex;
            align-items: center;
            justify-content: space-between;
            background-color: rgba(0, 0, 0, 0.4);
            width: 100%;
            height: 5.5rem;
            position: fixed;
            z-index: 9;
            color: white;
        }


        .nav-list{
            display: flex;
            list-style-type: none;
            gap: 2.5rem;
            font-weight: 700;
            color: white;
            padding-top: 2rem;
            padding-left: 1rem;
            font-size: 15px;
            float: right;
        }

        .sub-menu-warp {
        position: absolute;
        top: 5.4rem;
        right: -13rem;
        width: 25rem;
        max-height: 41rem;
        overflow: hidden;
        transition: max-height .5s;
        display: none;
        }

        .sub-menu-warp.open-menu {
        display: flex; 
        }



        .sub-menu{
        background-color: rgba(0, 0, 0, 0.5);
        padding: 0.5rem;
        margin: 0.1rem;
        height: 90vh;
        width: 45%;
        }

        .sub-menu hr{
        border: 0;
        height: 1px;
        width: 100%;
        background: #ccc;
        margin: 15px 0 10px; 
        }


        .user-info h3{
        font-weight: 500;
        }

        .user-info{
        display: flex;
        align-items: center;
        width: 100px;
        border-radius: 50%;
        margin-right: 15px;
        margin-left: -2rem;
        }

        .sub-menu-link{
        display: flex;
        align-items: center;
        text-decoration: none;
        margin: 8px 80px 70px;
        flex-direction: column;
        /* align-content: center; */
        justify-content: flex-end;
        }

        .sub-menu-link p {
        display: flex;
        width: 100%;
        align-items: center;
        }

        .sub-menu h2{
        margin-top: 6rem;
        margin-left: -5rem;
        transition: .5s;
        }

        .sub-menu-link:hover span{
        transform: scale(1.3);
        }

        .sub-menu-link:hover p{
        font-weight: 600 !important;
        }



        .nav-list li button{
            text-decoration: none;
            color: white;
            cursor: pointer;
        }

        .material-symbols-outlined {
        font-size: 4rem !important;
        }
        .nav-list button{

            font-style: italic;
            background-color: #E40b0b;
            border: transparent;
            border-radius: 50px;
            width: 150px;
            height: 42px;
            font-weight: 700;
            font-size: 19px;
            color: white;
            cursor: pointer;
            margin-top: -0.5rem;
            transition: .3s;
            
        }
        button p{
            margin-top: 0.4rem;
        }
        .nav-list button:hover{
            background-color: black;
            border: #E40b0b solid;
            transition: border ease-in-out 250ms;
        }

        .nav-list a{
            color: white !important;
            text-decoration: none !important;
            cursor: pointer;
            padding-bottom: 0.2rem;
            border: #E40b0b 0px;
        }

        .nav-list a:hover{
            border: #E40b0b solid 4px;
            border-radius: 3px;
            transition: border ease-in-out 120ms;
            border-top: transparent;
            border-left: transparent;
            border-right: transparent;
            
        }

        .b2{
            font-style: italic;
            background-color: transparent !important;
            font-weight: 700;
            font-size: 19px;
            color: white;
            cursor: pointer;
            max-width: 1rem;
            margin-top: -1rem;
            padding-right: 3rem;
            transition: .4s;
        }

        .nav-list .b2:hover{
            border: none;
            
        }

        .logo{
            max-width: 7rem;
            padding-left: 2.4rem;
        }

        .login{
            font-style: italic;
            background-color: transparent !important;
            font-weight: 700;
            font-size: 19px;
            color: white;
            cursor: pointer;
            max-width: 5rem;
            margin-top: -1rem;
            margin-left: 1.0rem;
        }

        .b2:hover,
        .login:hover {
        cursor: pointer;
        filter: brightness(0.7);
        fill: #E40b0b;
        }

        .a-mus{
            display: block;
            background-color: transparent;
            color: white;
            border: none !important;
            width: 5rem;
            cursor: pointer;
            font-size: 2rem;
        }

        .c-mus{
            display: none;
            background-color: transparent;
            color: #E40b0b;
            border: none !important;
            width: 5rem;
            cursor: pointer;
            font-size: 2rem;
            padding-left: 1rem;
            padding-top: 0rem;
        }
        .contenedor{
            margin:8rem auto;
        }
        .b2{
            position: relative;
            z-index: 2;
        }
        
        #op{
            position: relative;
            z-index: 2;
        }
        </style>
    <script defer src="\proyecto_rupture\js\app.js"></script>
    <title>Header</title>
</head>
<?php 

include "../conexion.php";

?>
<body>
<body onscroll="Camb()">
    <header id="headt"> 
           <a href="\proyecto_rupture\index.php"> <img src="\proyecto_rupture\img\unnamed-removebg-preview.svg" alt="logo" class="logo"></a>
            <button class="a-mu" id="abrir"><i class="fa-solid fa-bars"></i></button>
            <nav class="nav" id="nav">
                <button class="c-mu" id="cerrar"><i class="fa-solid fa-x"></i></button>
            <ul class="nav-list">
                <li><a class="clases" href="\proyecto_rupture\clases.php">Clases</a></li>
                <li><a>Planes</a></li>
                <li><a href="\proyecto_rupture\landing_rutinas.php">Rutinas</a></li>
                <li><a class="dietas" href="\proyecto_rupture\dietas.php">Dietas</a></li>
                <li><a class="tienda" href="\proyecto_rupture\tienda.php">Tienda</a></li>
                <li><a class="b2" id="op" onclick="openMenu()"><img src="\proyecto_rupture\img\login.svg" alt="" class="login"></a></li>
                <div class="sub-menu-warp">
                    <div class="sub-menu">
                        <div class="user-info">
                            <div class="sub-menu-links">
                            <a href="#" class="sub-menu-link">
                            </a>
                            <br>
                            <a href="#" class="sub-menu-link">
                                <span class="material-symbols-outlined">
                                    manage_accounts
                                </span>
                                <p>Configuracion</p>
                                </a>
                            <br>
                            <a href="#" class="sub-menu-link">
                            <span class="material-symbols-outlined">
                                logout
                            </span>
                                <p>Cerrar sesion</p>
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
            </ul>
            </nav>
    </header>
</body>
</html>
