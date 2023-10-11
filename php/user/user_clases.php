<?php

    session_start();
    error_reporting(0);

    $varsesion = $_SESSION['nombre'];
    $varsesioncorreo = $_SESSION['correo'];

    if($varsesion == null || $varsesion = ''){
        echo "No tiene permiso para ingresar";
        die();
    }

?>

<!DOCTYPE html>
<html lang="es" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../../img/unnamed-removebg-preview.svg">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="../../css/style_clases.css">
    <title>Clases Rupture</title>
</head>

<body onscroll="Camb()">

    <!-- 
        - #TOP BAR    
    --->

    <?php include "../modulos/header-af.php" ?>
    
    <main>
        <article>
                <!-- 
        - #HERO    
          --->

          <section class="section hero">
            <div class="container">
                <figure class="hero-banner img-holder" style="--width:240; --height:240;">
                    <img src="../../img/login.svg"  width="240" height="240" alt="Jhon Pulgarin" class="img-cover">
                </figure>
                
                <div class="hero-content">

                    <span class="label-large section-subtitle"> Usuario Atom</span>

                    <h1 class="display-small"><?php echo $_SESSION['nombre'];?></h1>

                    <p class="body-large section-text">Bienvenido a las clases atom!</p>
                    
                    <div class="btn-wrapper">
                        <a href="mailto:<?php $_SESSION['correo'];?>" class="chip">
                        <span class="material-symbols-outlined" aria-hidden="true"> mail </span>

                        <span class="label-large"><?php echo $_SESSION['correo'];?></span>

                        <div class="state-layer"></div>
                        </a>

                        
                        <div class="state-layer"></div>
                        </a>

                    </div>
                </div>
            </div>
          </section>
          
          <!-- 
            - #MAIN CONTENT - CLASES
           --->

           <div class="article">



                <div>

                    <!--- 
                        - #PRIMARY TABS
                    -->
                        <div class="primary-tabs">
                            <button class="tab-btn active" data-tab-btn="project">
                                <span class="tab-text title-small"> Clases</span>
                                
                                <div class="state-layer"></div>
                            </button>

                            <button class="tab-btn" data-tab-btn="resume">
                                <span class="tab-text title-small"> Populares</span>
                                
                                <div class="state-layer"></div>
                            </button>

                            <button class="tab-btn" data-tab-btn="contact">
                                <span class="tab-text title-small"> Para ti</span>
                                
                                <div class="state-layer"></div>
                            </button>

                        </div>




                    <!--- 
                        - #PROJECT
                    -->

                    <section class="section tab-content active" data-tab-content="project">
                        <div class="container">

                            <div class="project-list">

                                
                                <div class="card" onclick="nutricion()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="../../img/img_clases/nutricion.jpg" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Nutrición</span>

                                        <h3 class="title-large card-title"> Curso de nutrición</h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>
                                </div>
                                

                                <div class="card" onclick="keto()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="../../img/img_clases/keto.jpg" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Nutrición</span>

                                        <h3 class="title-large card-title"> Aprende sobre la Dieta Keto</h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>
                
                                <div class="card" onclick="cardio()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="../../img/img_clases/cardioResistencia.jpg" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Fitness</span>

                                        <h3 class="title-large card-title"> Curso de cardio y resistencia </h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>

                                <div class="card" onclick="hipertrofia()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="../../img/img_clases/hipertrofia.jpg" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Fitness</span>

                                        <h3 class="title-large card-title"> Curso de hipertrofia </h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>

                                <div class="card" onclick="halterofilia()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="../../img/img_clases/halterofilia.jpg" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Crossfit</span>

                                        <h3 class="title-large card-title"> Curso de halterofilia </h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>

                                <div class="card" onclick="calentamiento()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="../../img/img_clases/estiramiento.jpg" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Fitness</span>

                                        <h3 class="title-large card-title"> Básicos de calentamiento y estiramiento</h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>
                                
                                <div class="card" onclick="meditacion()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="../../img/img_clases/meditacion.jpg" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">meditación</span>

                                        <h3 class="title-large card-title"> Curso de meditación principiante</h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>

                                <div class="card" onclick="postura()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="../../img/img_clases/postura.jpg" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">postura</span>

                                        <h3 class="title-large card-title"> Curso de corrección de postura</h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>

                            </div>

                        </div>
                    </section>



                    <!--- 
                        - #RESUME
                    -->

                    <section class="section tab-content resume-tab" data-tab-content="resume">
                        <div class="container">

                            <div class="project-list">

                                <div class="card">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="../../img/img_clases/project-1.png" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Web App</span>

                                        <h3 class="title-large card-title"> Pixstock - Stock Media App</h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>

                                <div class="card">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="../../img/img_clases/project-2.png" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Web App</span>

                                        <h3 class="title-large card-title"> Cook.io - Recipe App</h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>
                
                                <div class="card">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="../../img/img_clases/project-3.png" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Web App</span>

                                        <h3 class="title-large card-title"> GitFinder - Github User Finder </h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>                                

                            </div>

                        </div>
                    </section>

                    <!--- 
                        - #CONTACT
                    -->

                    <section class="section tab-content contact-tab" data-tab-content="contact">
                        <div class="container">

                            <div class="project-list">

                                <div class="card">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="../../img/img_clases/project-1.png" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Web App</span>

                                        <h3 class="title-large card-title"> Pixstock - Stock Media App</h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>
                                

                            </div>

                        </div>
                    </section>


                </div>

           </div>

        </article>
    </main>

    <script>
        function nutricion(){
        Swal.fire({
        title: 'Curso de Nutrición',
        text: '¿Quieres aprender a alimentarte correctamente? Ingresa a este curso',
        imageUrl: '../../img/img_clases/nutricion.jpg',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
                showCancelButton: true,
        confirmButtonText:
                    '<a href="../user/videos_clases/nutricion.php"><i class="fa fa-thumbs-up"></i> Vamos!</a>',
                confirmButtonAriaLabel: 'Thumbs up, great!'
        })
        }

        function keto(){
        Swal.fire({
        title: 'Básicos de la Dieta Keto',
        text: 'Aprende sobre formas alternativas de llevar tu nutrición diaria con la Dieta Keto.',
        imageUrl: '../../img/img_clases/keto.jpg',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
                showCancelButton: true,
        confirmButtonText:
                    '<a href="../user/videos_clases/clase1.php"><i class="fa fa-thumbs-up"></i> Vamos!</a>',
                confirmButtonAriaLabel: 'Thumbs up, great!'
        })
        }

        function cardio(){
        Swal.fire({
        title: 'Curso de cardio y resistencia',
        text: 'En este curso verás cómo ejecutar rutinas de cardio y resistencia',
        imageUrl: '../../img/img_clases/cardioResistencia.jpg',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
                showCancelButton: true,
        confirmButtonText:
                    '<a href="../user/videos_clases/clase1.php"><i class="fa fa-thumbs-up"></i> Vamos!</a>',
                confirmButtonAriaLabel: 'Thumbs up, great!'
        })
        }

        function hipertrofia(){
        Swal.fire({
        title: 'Curso de hipertrofia',
        text: 'Incursiona en el mundo del aumento de músculo con este pequeño curso sobre la hipertrofia',
        imageUrl: '../../img/img_clases/hipertrofia.jpg',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
                showCancelButton: true,
        confirmButtonText:
                    '<a href="../user/videos_clases/clase1.php"><i class="fa fa-thumbs-up"></i> Vamos!</a>',
                confirmButtonAriaLabel: 'Thumbs up, great!'
        })
        }

        function halterofilia(){
        Swal.fire({
        title: 'Curso de halterofilia',
        text: 'Aprende sobre técnicas básicas de crossfit y halterofilia en este pequeño curso',
        imageUrl: '../../img/img_clases/halterofilia.jpg',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
                showCancelButton: true,
        confirmButtonText:
                    '<a href="../user/videos_clases/clase1.php"><i class="fa fa-thumbs-up"></i> Vamos!</a>',
                confirmButtonAriaLabel: 'Thumbs up, great!'
        })
        }

        function calentamiento(){
        Swal.fire({
        title: 'Básicos de calentamiento y estiramiento',
        text: 'Aprende básicos de rutinas de calentamiento y estiramiento pre ejercicio y post ejercicio',
        imageUrl: '../../img/img_clases/estiramiento.jpg',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
                showCancelButton: true,
        confirmButtonText:
                    '<a href="../user/videos_clases/clase1.php"><i class="fa fa-thumbs-up"></i> Vamos!</a>',
                confirmButtonAriaLabel: 'Thumbs up, great!'
        })
        }

        function meditacion(){
        Swal.fire({
        title: 'Curso de meditación principiante',
        text: 'Aprende cómo conectarte contigo mismo y tus pensamientos',
        imageUrl: '../../img/img_clases/meditacion.jpg',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
                showCancelButton: true,
        confirmButtonText:
                    '<a href="../user/videos_clases/clase1.php"><i class="fa fa-thumbs-up"></i> Vamos!</a>',
                confirmButtonAriaLabel: 'Thumbs up, great!'
        })
        }

        function postura(){
        Swal.fire({
        title: 'Corrige tu postura',
        text: 'Mejora tu postura, aumenta tu postura y apariencia corporal con este pequeño curso de ejercicios',
        imageUrl: '../../img/img_clases/postura.jpg',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
                showCancelButton: true,
        confirmButtonText:
                    '<a href="../user/videos_clases/clase1.php"><i class="fa fa-thumbs-up"></i> Vamos!</a>',
                confirmButtonAriaLabel: 'Thumbs up, great!'
        })
        }
    </script>

    <script defer src="../../js/app.js"></script>
    <script defer src="../../js/clases.js"></script>

</body>
</html>
