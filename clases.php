<!DOCTYPE html>
<html lang="es" data-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./img/unnamed-removebg-preview.svg">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="css/style_clases.css">
    <script defer src="js/clases.js"></script>
    <title>Clases Rupture</title>
</head>

<body>

    <!-- 
        - #TOP BAR    
    --->

    <header class="topbar">
        <a href="#" class="logo">
            <img src="./img/img_clases/Logo_dark.png" alt="Atom" width="145" height="32" class="dark">
            <img src="./img/img_clases/Logo_light.png" alt="Atom" width="145" height="32" class="light">
        </a>

        <button class="icon-btn theme-btn" data-theme-btn>
            
            <span class="material-symbols-outlined dark" aria-hidden="true"> dark_mode </span>

            <span class="material-symbols-outlined light" aria-hidden="true"> light_mode </span>

            <div class="state-layer"></div>
        </button>
    </header>
    
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

                    <h1 class="display-small">Jhon Pulgarin</h1>

                    <p class="body-large section-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Et quidem voluptate voluptatem sequi hic dolor quo neque fuga corrupti sapiente, deserunt ex id impedit nesciunt nobis assumenda ducimus exercitationem? Amet!</p>
                    
                    <div class="btn-wrapper">
                        <a href="mailto:jhon123@gmail.com" class="chip">
                        <span class="material-symbols-outlined" aria-hidden="true"> mail </span>

                        <span class="label-large">jhon123@gmail.com</span>

                        <div class="state-layer"></div>
                        </a>

                        <a href="tel:3000000009" class="chip">
                        <span class="material-symbols-outlined" aria-hidden="true"> mail </span>

                        <span class="label-large">3000000009</span>
                        
                        <div class="state-layer"></div>
                        </a>

                    </div>
                </div>
            </div>
          </section>
        </article>
    </main>

</body>
</html>