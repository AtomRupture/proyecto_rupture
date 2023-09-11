<!DOCTYPE html>
<html lang="es" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/unnamed-removebg-preview.svg">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" href="css/style_clases.css">
    <title>Clases Rupture</title>
</head>

<body onscroll="Camb()">

    <!-- 
        - #TOP BAR    
    --->

    <?php include './php/modulos/header.php' ?>
    
    <main>
        <article>
                <!-- 
        - #HERO    
          --->

          <section class="section hero">
            <div class="container">
                <figure class="hero-banner img-holder" style="--width:240; --height:240;">
                    <img src="./img/img_clases/profile.png"  width="240" height="240" alt="Jhon Pulgarin" class="img-cover">
                </figure>
                
                <div class="hero-content">

                    <span class="label-large section-subtitle"> Usuario Atom</span>

                    <h1 class="display-small">Usuario_01</h1>

                    <p class="body-large section-text">Bienvenido a las clases atom!</p>
                    
                    <div class="btn-wrapper">
                        <a href="mailto:jhon123@gmail.com" class="chip">
                        <span class="material-symbols-outlined" aria-hidden="true"> mail </span>

                        <span class="label-large">user123@gmail.com</span>

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
                                <span class="tab-text title-small"> En progreso</span>
                                
                                <div class="state-layer"></div>
                            </button>

                            <button class="tab-btn" data-tab-btn="contact">
                                <span class="tab-text title-small"> Terminadas</span>
                                
                                <div class="state-layer"></div>
                            </button>

                        </div>




                    <!--- 
                        - #PROJECT
                    -->

                    <section class="section tab-content active" data-tab-content="project">
                        <div class="container">

                            <div class="project-list">

                                <div class="card" onclick="alerta()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="./img/img_clases/project-1.png" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Web App</span>

                                        <h3 class="title-large card-title"> Pixstock - Stock Media App</h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>

                                <div class="card" onclick="alerta()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="./img/img_clases/project-2.png" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Web App</span>

                                        <h3 class="title-large card-title"> Cook.io - Recipe App</h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>
                
                                <div class="card" onclick="alerta()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="./img/img_clases/project-3.png" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Web App</span>

                                        <h3 class="title-large card-title"> GitFinder - Github User Finder </h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>

                                <div class="card" onclick="alerta()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="./img/img_clases/project-4.png" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Web App</span>

                                        <h3 class="title-large card-title"> Weatherio - Live weather finder </h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>

                                <div class="card" onclick="alerta()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="./img/img_clases/project-5.png" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Web App</span>

                                        <h3 class="title-large card-title"> Tvflix - Netflix Clone 2.0 </h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>

                                <div class="card" onclick="alerta()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="./img/img_clases/project-6.png" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Website</span>

                                        <h3 class="title-large card-title"> Travelia - Travel Website </h3>
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

                                <div class="card" onclick="alerta()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="./img/img_clases/project-1.png" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Web App</span>

                                        <h3 class="title-large card-title"> Pixstock - Stock Media App</h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>

                                <div class="card" onclick="alerta()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="./img/img_clases/project-2.png" alt="" width="334" height="100" class="img-cover">
                                    </figure>

                                    <div class="card-content">
                                        <span class="label-large card-subtitle">Web App</span>

                                        <h3 class="title-large card-title"> Cook.io - Recipe App</h3>
                                    </div>

                                    <a href="#" class="state-layer"></a>

                                </div>
                
                                <div class="card" onclick="alerta()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="./img/img_clases/project-3.png" alt="" width="334" height="100" class="img-cover">
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

                                <div class="card" onclick="alerta()">

                                    <figure class="card-banner img-holder" style="--width: 334; --height: 100;">
                                        <img src="./img/img_clases/project-1.png" alt="" width="334" height="100" class="img-cover">
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
        function alerta(){
            Swal.fire({
                title: '<strong>Registrate</strong>',
                icon: 'info',
                html:
                    'Para acceder debes <br> <b> registrarte</b>',
                showCloseButton: true,
                showCancelButton: true,
                focusConfirm: false,
                confirmButtonText:
                    '<a href="./login.php"><i class="fa fa-thumbs-up"></i> Vamos!</a>',
                confirmButtonAriaLabel: 'Thumbs up, great!',
                cancelButtonText:
                    '<i class="fa fa-thumbs-down"></i>',
                cancelButtonAriaLabel: 'Thumbs down'
                });
        }
    </script>

    <script defer src="js/app.js"></script>
    <script defer src="js/clases.js"></script>

</body>
</html>
