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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/49b40f8ce6.js" crossorigin="anonymous"></script>
    <link rel="shortcut icon" href="\proyecto_rupture\img\unnamed.png">
    <link rel="stylesheet" href="css_programas/programas_rutinas.css">
    <title>Isquiotibiales con mancuernas y bandas</title>
</head>
<body>

    <?php include "../../modulos/header-back.php" ?>
    <?php include "../../modulos/loader.php" ?>

    <!-- Botón empezar rutina -->
    <div class="start_btn"><button>Empezar Rutina</button></div>
    
    <!-- Info box -->
    <div class="info_box">
        <div class="info-title">
            <span>Algunas reglas de la rutina</span>
        </div>
        <div class="info-list">
            <div class="info">1. Cumple los <span>tiempos</span> definidos</div>
            <div class="info">2. Acaba la rutina completamente  </div>
            <div class="info">3. Descansa cuando te lo indique la rutina </div>
            <div class="info">4. Para solo si te sientes mal </div>
            <div class="info">5. ¡Tú puedes!</div>
        </div>
        <div class="buttons">
            <button class="quit">Salir</button>
            <button class="restart">Continuar</button>
        </div>
    </div>

    <!-- quiz box  -->
    <div class="quiz_box">
        <header>
            <div class="title">Rutina de Isquiotibiales</div>
            <div class="timer">
                <div class="time_left_txt">Tiempo restante</div>
                <div class="timer_sec">15</div>
            </div>
            <div class="time_line"></div>
        </header>
        <section>
            <div class="que_text">
                <!-- <span> Curl de bicep </span> -->
            </div>
            <div class="option_list">
                <!-- <div><img src="img_programas/curl.gif" alt=""></div> -->
            </div>
        </section>

        <!-- Quiz box footer -->
        <footer>
            <div class="total_que">
                <!-- <span><p>2</p>de<p>5</p>series</span> -->
            </div>
            <button class="next_btn">Siguiente</button>
        </footer>
    </div>

    <!-- Result box -->
    <div class="result_box">
        <div class="icon">
            <i class="fas fa-crown"></i>
        </div>
        <div class="complete_text">Has completado la rutina!</div>
        <div class="buttons">
            <button class="restart">Volver a realizar</button>
            <button class="quit" onclick="quit()">Quitar</button>
        </div>
    </div>

    <script src="js_programas/programa_rutinas.js"></script>
    <script src="js_programas/insertarIsquiMaq.js"></script>
</body>
</html>