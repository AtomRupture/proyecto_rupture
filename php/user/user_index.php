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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/49b40f8ce6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="shortcut icon" href="../../img/unnamed-removebg-preview.svg">
    <link rel="stylesheet" href="../../css/style-responsive.css">
    <title>Atom rupture</title>
</head>

<body onscroll="Camb()">

<header id="headt"> 
           <a href="user_index.php"> <img src="../../img/unnamed-removebg-preview.svg" alt="logo" class="logo"></a>
            <button class="a-mu" id="abrir"><i class="fa-solid fa-bars"></i></button>
            <nav class="nav" id="nav">
                <button class="c-mu" id="cerrar"><i class="fa-solid fa-x"></i></button>
            <ul class="nav-list">
                <li><a class="clases" href="../../clases.php">Clases</a></li>
                <li><a>Planes</a></li>
                <li><a>Rutinas</a></li>
                <li><a>Dietas</a></li>
                <li><a class="tienda" href="../../tienda.php">Tienda</a></li>
                <li><button onclick="enviar_form()" class="bo"><p>Comience ya!</p></button></li>
                <li><a class="b2" onclick=""><img src="../../img/login.svg" alt="" class="login"></a></li>
            </ul>
            </nav>
    </header>
  
<!-- SECCIÓN 1 -->
    <section class="sec1">

        <div class="sec1-el">
            <div class="b3">
                <div class="contenedor">
                <h1 class="Text_princp">BIENVENIDO A ATOM RUPTURE</h1>
            <div class="btt">
                <h2 class="text_second"><?php echo $_SESSION['nombre'];?></h2>
            </div>
            <hr class="line-1">
            <div class="bt">
                <button class="emp-ahr" onclick="enviar_form()">
                    EMPIEZA AHORA
                </button>
            </div>
            </div>
        </div>

    </section>
    
<!--  SECCIÓN 2 -->
<section class="sec2">



<article class="wrapper">

<!-- 
<button class="toggle" id="direction-toggle">
  <span>Toggle scroll axis</span>
  <svg aria-hidden="true" viewBox="0 0 512 512" width="100" title="arrows-alt-h">
    <path d="M377.941 169.941V216H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.568 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296h243.882v46.059c0 21.382 25.851 32.09 40.971 16.971l86.059-86.059c9.373-9.373 9.373-24.568 0-33.941l-86.059-86.059c-15.119-15.12-40.971-4.412-40.971 16.97z" />
  </svg>
</button>
-->

  <div class="marquee">
    <div class="marquee__group">

      <img src="../../img/Nutramerican.png" alt="">


      <img src="../../img/abbott-logo.png" alt="">


      <img src="../../img/black_magic.png" alt="">


      <img src="../../img/megaplex.png" alt="">


      <img src="../../img//Optimum_nutrition.png" alt="">


      <img src="../../img/herbalife.png" alt="">


      <img src="../../img/Muscletech.png" alt="">


      <img src="../../img/Dymatize.png" alt="">

    </div>

    <div aria-hidden="true" class="marquee__group">

      <img src="../../img/Nutramerican.png" alt="">


      <img src="../../img/abbott-logo.png" alt="">


      <img src="../../img/black_magic.png" alt="">


      <img src="../../img/megaplex.png" alt="">


      <img src="../../img//Optimum_nutrition.png" alt="">


      <img src="../../img/herbalife.png" alt="">


      <img src="../../img/Muscletech.png" alt="">


      <img src="../../img/Dymatize.png" alt="">

    </div>
  </div>

  <div class="marquee marquee--reverse">
    <div class="marquee__group">

      <img src="../../img/Dymatize.png" alt="">


      <img src="../../img/Muscletech.png" alt="">


      <img src="../../img/herbalife.png" alt="">


      <img src="../../img//Optimum_nutrition.png" alt="">


      <img src="../../img/megaplex.png" alt="">


      <img src="../../img/black_magic.png" alt="">


      <img src="../../img/abbott-logo.png" alt="">


      <img src="../../img/Nutramerican.png" alt="">

    </div>

    <div aria-hidden="true" class="marquee__group">

      <img src="../../img/Dymatize.png" alt="">


      <img src="../../img/Muscletech.png" alt="">


      <img src="../../img/herbalife.png" alt="">


      <img src="../../img//Optimum_nutrition.png" alt="">


      <img src="../../img/megaplex.png" alt="">


      <img src="../../img/black_magic.png" alt="">


      <img src="../../img/abbott-logo.png" alt="">


      <img src="../../img/Nutramerican.png" alt="">

    </div>
  </div>
</article>

    </section>

<!-- SECCIÓN 3 -->
    <section class="sec3">

        <div class="contenedor3">
            <div class="cont_items">
                <div class="item1"><svg width="240" height="240" viewBox="0 0 240 223" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M170 59.1938C170 73.1313 165 91.7146 141 99.1479C148 83.3521 149 67.5563 144 52.6896C137 33.1771 114 18.3104 98 9.94793C94 7.16043 87 10.8771 88 16.4521C88 26.6729 85 41.5396 68 57.3354C46 77.7771 35 99.1479 35 119.59C35 146.535 55 179.985 95 179.985C55 142.819 85 110.298 85 110.298C93 165.119 135 179.985 155 179.985C172 179.985 205 168.835 205 120.519C205 91.7146 192 69.4146 181 56.4063C178 51.7604 171 54.5479 170 59.1938Z" fill="white"/>
                    </svg>
                    <p>Trabajo eficiente, de calidad y de alta intensidad.</p>
                </div>
                <div class="item2"><svg width="240" height="240" viewBox="0 0 202 210" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M159.841 17.5H75.8341C66.4832 17.5 58.9166 25.3663 58.9166 35.0875V84.4112L19.3414 125.029C18.1556 126.248 17.345 127.806 17.0124 129.505C16.6797 131.204 16.8401 132.967 17.4732 134.571C18.1062 136.175 19.1834 137.548 20.568 138.514C21.9526 139.481 23.5821 139.998 25.2499 140V183.75C25.2499 186.071 26.1367 188.296 27.7151 189.937C29.2935 191.578 31.4343 192.5 33.6666 192.5H168.333C170.565 192.5 172.706 191.578 174.285 189.937C175.863 188.296 176.75 186.071 176.75 183.75V35.0787C176.75 25.3662 169.192 17.5 159.841 17.5ZM91.9267 132.221V175H42.0832V126.28L67.2238 100.476L91.9267 126.752V132.221ZM109.417 78.75H92.5832V61.25H109.417V78.75ZM143.083 148.75H126.25V131.25H143.083V148.75ZM143.083 113.75H126.25V96.25H143.083V113.75ZM143.083 78.75H126.25V61.25H143.083V78.75Z" fill="white"/>
                    <path d="M58.9167 131.25H75.7501V148.75H58.9167V131.25Z" fill="white"/>
                    </svg>
                    <p>Haz ejercicio sin salir de tu casa.</p>
                </div>
                <div class="item3"><svg width="240" height="240" viewBox="0 0 271 266" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M146.792 33.25H191.958V55.4167H146.792V33.25ZM33.8749 88.6667H79.0416V110.833H33.8749V88.6667ZM33.8749 177.333H79.0416V199.5H33.8749V177.333ZM22.5833 133H67.637V155.167H22.5833V133ZM245.108 74.3359L229.142 58.6641L209.867 77.5833C197.65 70.3366 183.649 66.5041 169.375 66.5C125.8 66.5 90.3333 101.313 90.3333 144.083C90.3333 186.854 125.8 221.667 169.375 221.667C212.949 221.667 248.417 186.854 248.417 144.083C248.405 124.644 240.926 105.924 227.471 91.6592L245.108 74.3359ZM180.667 155.167H158.083V99.2845H180.667V155.167Z" fill="white"/>
                    </svg>
                    <p>Programate a tu horario y comodidad.</p>
                </div>
            </div>
        </div>

    </section>

<!-- SECCIÓN 4 -->
    <section class="sec4">

        <div class="cont4">
            <div class="cont-title-sec4">
                <div class="title-sec4">
                <div class="left-title4">
                    <h1> EL CAMBIO </h1>
                    <h1> COMIENZA CON</h1>
                </div>

                <div class="right-title4">
                    <img src="../../img/unnamed-removebg-preview.svg">
                    <img src="" alt="">
                </div>
                </div>
            </div>
            <hr>
        </div>

        <div class="container-pago">
            <div class="fila-pago">
                <div class="columna-pago co-pag1">
                    <p>Iniciante</p>
                    <h3>19$ <span>/ mes</span></h3>
                    <ul>
                        <li>1 entrenador  </li>
                        <li>Contenido base  </li>
                        <li>Acceso a clases iniciantes </li>
                        <li>Descuentos mensuales</li>
                        <li>Dietas predefinidas</li>
                        <li>Rutinas predefinidas </li>
                    </ul>
                    <button class="btn-precios">Compralo</button>
                </div>

                <div class="columna-pago co-pag2">
                    <p>Avanzado</p>
                    <h3>25$ <span>/ mes</span></h3>
                    <ul>
                        <li>1 entrenador </li>
                        <li> Contenido personalizado</li>
                        <li>Clases avanzadas </li>
                        <li>Descuentos diarios</li>
                        <li>Dietas predefinidas</li>
                        <li>Rutinas personalizadas</li>
                    </ul>
                    <button class="btn-precios">Compralo</button>
                </div>

                <div class="columna-pago co-pag3">
                    <p>Premium</p>
                    <h3>30$ <span>/ mes</span></h3>
                    <ul>
                        <li>2 o más entrenadores </li>
                        <li>Contenido especializado </li>
                        <li>Clases avanzadas </li>
                        <li>Descuentos totales</li>
                        <li>Dietas personalizadas </li>
                        <li>Rutinas personalizadas  </li>
                    </ul>
                    <button class="btn-precios">Compralo</button>
                </div>
            </div>
        </div>

    </section>

    <!-- SECCIÓN 5 --> 

    <section class="sec5">

                <div class="cont-title-sec5">
                <div class="title-sec5">
                <div class="left-title5">
                    <h1 style="color: whitesmoke;"> DIETAS ATÓMICAS EN</h1>
                </div>

                <div class="right-title5">
                    <img src="../../img/unnamed-removebg-preview.svg">
                    <img src="" alt="">
                </div>
                </div>
            </div>

      <div class="card-swiper">
    <div class="card-groups">
      <div class="card-group" data-index="0" data-status="active">
        <div class="little-card card">

        </div>
        <div class="big-card card">

        </div>
        <div class="little-card card">

        </div>
        <div class="big-card card">

        </div>
        <div class="little-card card">

        </div>
        <div class="big-card card">

        </div>
        <div class="little-card card">

        </div>
        <div class="big-card card">

        </div>
      </div>
      <div class="card-group" data-index="1" data-status="unknown">
        <div class="little-card card">

        </div>
        <div class="big-card card">

        </div>
        <div class="little-card card">

        </div>
        <div class="big-card card">

        </div>
        <div class="little-card card">

        </div>
        <div class="big-card card">

        </div>
        <div class="little-card card">

        </div>
        <div class="big-card card">

        </div>
      </div>
      <div class="card-group" data-index="2" data-status="unknown">
        <div class="little-card card">

        </div>
        <div class="big-card card">

        </div>
        <div class="little-card card">

        </div>
        <div class="big-card card">

        </div>
        <div class="little-card card">

        </div>
        <div class="big-card card">

        </div>
        <div class="little-card card">

        </div>
        <div class="big-card card">

        </div>
      </div>
    </div>
    <div class="card-swiper-buttons">
      <button id="hate-button" onclick="handleHateClick()">
        <i class="fa-solid fa-x"></i>
      </button>
      <button id="love-button" onclick="handleLoveClick()">
        <i class="fa-solid fa-heart"></i>
      </button>
    </div>
  </div>

  </section>

    <!-- SECCIÓN 6 --> 
    <section class="sec6">
    <div class="wrapper2">
	<div class="card2">
		<div class="poster"><img src="../../img/adaptacion.jpg" alt="Location Unknown"></div>
		<div class="details">
			<h1>Adaptación</h1>
			<h2>2023 • 4 videos</h2>
			<div class="rating">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
				<span>4.2/5</span>
			</div>
			<div class="tags">
				<span class="tag">Iniciante</span>
				<span class="tag">Básico</span>
				<span class="tag">Corto</span>
			</div>
			<p class="desc">
				Es importante iniciar con con un proceso de acondicionamiento que habitue tu cuerpo
			</p>
			<div class="cast">
				<h3>Entrenadores</h3>
				<ul>
					<li><img src="https://i.postimg.cc/jqgkqhSb/cast-11.jpg" alt="Marco Andrews" title="Marco Andrews"></li>
					<li><img src="https://i.postimg.cc/8P7X7r7r/cast-12.jpg" alt="Rebecca Floyd" title="Rebecca Floyd"></li>
					<li><img src="https://i.postimg.cc/2SvHwRFk/cast-13.jpg" alt="Antonio Herrera" title="Antonio Herrera"></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="card2">
		<div class="poster"><img src="../../img/resistencia.jpg" alt="Location Unknown"></div>
		<div class="details">
			<h1>Resistencia</h1>
			<h2>2023 • 6 clases</h2>
			<div class="rating">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="far fa-star"></i>
				<span>4/5</span>
			</div>
			<div class="tags">
				<span class="tag">Iniciante</span>
				<span class="tag">Corto</span>
			</div>
			<p class="desc">
				Two strangers meet together on a plane flying to the alps.
			</p>
			<div class="cast">
				<h3>Entrenadores</h3>
				<ul>
					<li><img src="https://i.postimg.cc/yY2QcYRp/cast-21.jpg" alt="Angelina Whyte" title="Angelina Whyte"></li>
					<li><img src="https://i.postimg.cc/R0BgpsXc/cast-22.jpg" alt="Ivan Benson" title="Ivan Benson"></li>
				</ul>
			</div>
		</div>
	</div>
	<div class="card2">
		<div class="poster"><img src="../../img/calistenia.jpg" alt="Location Unknown"></div>
		<div class="details">
			<h1>Calistenia</h1>
			<h2>2023 • 10 clases</h2>
			<div class="rating">
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star"></i>
				<i class="fas fa-star-half-alt"></i>
				<span>4.7/5</span>
			</div>
			<div class="tags">
				<span class="tag yellow">Jóvenes</span>
				<span class="tag">Intermedio</span>
				<span class="tag blue">Fuerza</span>
			</div>
			<p class="desc">
				Alex, together with his best friends, goes on a road trip whilst experiencing friendship, self-discovery, and the bittersweet transition to adulthood.
			</p>
			<div class="cast">
				<h3>Entrenadores</h3>
				<ul>
					<li><img src="https://i.postimg.cc/xd3twv4B/cast-31.jpg" alt="Jessica Enduro" title="Jessica Enduro"></li>
					<li><img src="https://i.postimg.cc/C1MmSZy5/cast-32.jpg" alt="Charles Garcia" title="Charles Garcia"></li>
				</ul>
			</div>
		</div>
	</div>
</div>
  </section>

      <!-- ----------------BOTÓN REDES---------------- -->
      <div class="bot">
        <input type="checkbox" id="btn-mas">
        <div class="redes">
            <a href="#" class="fa-brands fa-instagram"></a>
            <a href="#" class="fa-brands fa-facebook"></a>
            <a href="#" class="fa-brands fa-whatsapp"></a>
        </div>
        <div class="btn-mas">
            <label for="btn-mas" class="fa-solid fa-circle-plus"></label>
        </div>
    </div>

    <!-- --------------------BOTÓN ACTIVO UP-------------------- -->
    <div class="go-top-container">
      <div class="go-top-button">
        <i class="fas fa-chevron-up"></i>
      </div>
    </div>

      <!-- ------------FOOTER----------------- --> 

      <div class="pg-footer">
    <footer class="footer">
      <svg class="footer-wave-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 100" preserveAspectRatio="none">
        <path class="footer-wave-path" d="M851.8,100c125,0,288.3-45,348.2-64V0H0v44c3.7-1,7.3-1.9,11-2.9C80.7,22,151.7,10.8,223.5,6.3C276.7,2.9,330,4,383,9.8 c52.2,5.7,103.3,16.2,153.4,32.8C623.9,71.3,726.8,100,851.8,100z"></path>
      </svg>
      <div class="footer-content">
        <div class="footer-content-column">
          <div class="footer-logo">
            <a class="footer-logo-link" href="#">
              <img src="../../img/unnamed-removebg-preview.svg" alt="logo" class="logo"></a>
            </a>
          </div>
          <div class="footer-menu">
            <h2 class="footer-menu-name"> Get Started</h2>
            <ul id="menu-get-started" class="footer-menu-list">
              <li class="menu-item menu-item-type-post_type menu-item-object-product">
                <a href="#">Start</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-product">
                <a href="#">Documentation</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-product">
                <a href="#">Installation</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-content-column">
          <div class="footer-menu">
            <h2 class="footer-menu-name"> Company</h2>
            <ul id="menu-company" class="footer-menu-list">
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Contact</a>
              </li>
              <li class="menu-item menu-item-type-taxonomy menu-item-object-category">
                <a href="#">News</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Careers</a>
              </li>
            </ul>
          </div>
          <div class="footer-menu">
            <h2 class="footer-menu-name"> Legal</h2>
            <ul id="menu-legal" class="footer-menu-list">
              <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-privacy-policy menu-item-170434">
                <a href="#">Privacy Notice</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-content-column">
          <div class="footer-menu">
            <h2 class="footer-menu-name"> Quick Links</h2>
            <ul id="menu-quick-links" class="footer-menu-list">
              <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a target="_blank" rel="noopener noreferrer" href="#">Support Center</a>
              </li>
              <li class="menu-item menu-item-type-custom menu-item-object-custom">
                <a target="_blank" rel="noopener noreferrer" href="#">Service Status</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Security</a>
              </li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Blog</a>
              </li>
              <li class="menu-item menu-item-type-post_type_archive menu-item-object-customer">
                <a href="#">Customers</a></li>
              <li class="menu-item menu-item-type-post_type menu-item-object-page">
                <a href="#">Reviews</a>
              </li>
            </ul>
          </div>
        </div>
        <div class="footer-content-column">
          
          <div class="footer-call-to-action">
          <div class="popup">
  <form class="form">

    <div class="note">
      <label class="title">Subscribe for updates</label>
      <span class="subtitle">Subscribe to this weekly news letter so you don’t miss out
on the new hot tech topics.</span>
    </div>
    <input placeholder="Enter your e-mail" title="Enter your e-mail" name="email" type="email" class="input_field">
    <button class="submit">Submit</button>
  </form>
</div>
          </div>
          <div class="footer-call-to-action">
            <h2 class="footer-call-to-action-title"> You Call Us</h2>
            <p class="footer-call-to-action-link-wrapper"> <a class="footer-call-to-action-link" href="tel:0124-64XXXX" target="_self"> 0124-64XXXX </a></p>
          </div>
        </div>
        <div class="footer-social-links"> <svg class="footer-social-amoeba-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 236 54">
            <path class="footer-social-amoeba-path" d="M223.06,43.32c-.77-7.2,1.87-28.47-20-32.53C187.78,8,180.41,18,178.32,20.7s-5.63,10.1-4.07,16.7-.13,15.23-4.06,15.91-8.75-2.9-6.89-7S167.41,36,167.15,33a18.93,18.93,0,0,0-2.64-8.53c-3.44-5.5-8-11.19-19.12-11.19a21.64,21.64,0,0,0-18.31,9.18c-2.08,2.7-5.66,9.6-4.07,16.69s.64,14.32-6.11,13.9S108.35,46.5,112,36.54s-1.89-21.24-4-23.94S96.34,0,85.23,0,57.46,8.84,56.49,24.56s6.92,20.79,7,24.59c.07,2.75-6.43,4.16-12.92,2.38s-4-10.75-3.46-12.38c1.85-6.6-2-14-4.08-16.69a21.62,21.62,0,0,0-18.3-9.18C13.62,13.28,9.06,19,5.62,24.47A18.81,18.81,0,0,0,3,33a21.85,21.85,0,0,0,1.58,9.08,16.58,16.58,0,0,1,1.06,5A6.75,6.75,0,0,1,0,54H236C235.47,54,223.83,50.52,223.06,43.32Z"></path>
          </svg>
          <a class="footer-social-link linkedin" href="#" target="_blank">
            <span class="hidden-link-text">Linkedin</span>
            <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg"
              viewBox="0 0 30 30">
              <path class="footer-social-icon-path" d="M9,25H4V10h5V25z M6.501,8C5.118,8,4,6.879,4,5.499S5.12,3,6.501,3C7.879,3,9,4.121,9,5.499C9,6.879,7.879,8,6.501,8z M27,25h-4.807v-7.3c0-1.741-0.033-3.98-2.499-3.98c-2.503,0-2.888,1.896-2.888,3.854V25H12V9.989h4.614v2.051h0.065 c0.642-1.18,2.211-2.424,4.551-2.424c4.87,0,5.77,3.109,5.77,7.151C27,16.767,27,25,27,25z"></path>
            </svg>
          </a>
          <a class="footer-social-link twitter" href="#" target="_blank">
            <span class="hidden-link-text">Twitter</span>
            <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 26 26">
              <path class="footer-social-icon-path" d="M 25.855469 5.574219 C 24.914063 5.992188 23.902344 6.273438 22.839844 6.402344 C 23.921875 5.75 24.757813 4.722656 25.148438 3.496094 C 24.132813 4.097656 23.007813 4.535156 21.8125 4.769531 C 20.855469 3.75 19.492188 3.113281 17.980469 3.113281 C 15.082031 3.113281 12.730469 5.464844 12.730469 8.363281 C 12.730469 8.773438 12.777344 9.175781 12.867188 9.558594 C 8.503906 9.339844 4.636719 7.246094 2.046875 4.070313 C 1.59375 4.847656 1.335938 5.75 1.335938 6.714844 C 1.335938 8.535156 2.261719 10.140625 3.671875 11.082031 C 2.808594 11.054688 2 10.820313 1.292969 10.425781 C 1.292969 10.449219 1.292969 10.46875 1.292969 10.492188 C 1.292969 13.035156 3.101563 15.15625 5.503906 15.640625 C 5.0625 15.761719 4.601563 15.824219 4.121094 15.824219 C 3.78125 15.824219 3.453125 15.792969 3.132813 15.730469 C 3.800781 17.8125 5.738281 19.335938 8.035156 19.375 C 6.242188 20.785156 3.976563 21.621094 1.515625 21.621094 C 1.089844 21.621094 0.675781 21.597656 0.265625 21.550781 C 2.585938 23.039063 5.347656 23.90625 8.3125 23.90625 C 17.96875 23.90625 23.25 15.90625 23.25 8.972656 C 23.25 8.742188 23.246094 8.515625 23.234375 8.289063 C 24.261719 7.554688 25.152344 6.628906 25.855469 5.574219 "></path>
            </svg>
          </a>
          <a class="footer-social-link youtube" href="#" target="_blank">
            <span class="hidden-link-text">Youtube</span>
            <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 30 30">
              <path class="footer-social-icon-path" d="M 15 4 C 10.814 4 5.3808594 5.0488281 5.3808594 5.0488281 L 5.3671875 5.0644531 C 3.4606632 5.3693645 2 7.0076245 2 9 L 2 15 L 2 15.001953 L 2 21 L 2 21.001953 A 4 4 0 0 0 5.3769531 24.945312 L 5.3808594 24.951172 C 5.3808594 24.951172 10.814 26.001953 15 26.001953 C 19.186 26.001953 24.619141 24.951172 24.619141 24.951172 L 24.621094 24.949219 A 4 4 0 0 0 28 21.001953 L 28 21 L 28 15.001953 L 28 15 L 28 9 A 4 4 0 0 0 24.623047 5.0546875 L 24.619141 5.0488281 C 24.619141 5.0488281 19.186 4 15 4 z M 12 10.398438 L 20 15 L 12 19.601562 L 12 10.398438 z"></path>
            </svg>
          </a>
          <a class="footer-social-link github" href="#" target="_blank">
            <span class="hidden-link-text">Github</span>
            <svg class="footer-social-icon-svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 32 32">
              <path class="footer-social-icon-path" d="M 16 4 C 9.371094 4 4 9.371094 4 16 C 4 21.300781 7.4375 25.800781 12.207031 27.386719 C 12.808594 27.496094 13.027344 27.128906 13.027344 26.808594 C 13.027344 26.523438 13.015625 25.769531 13.011719 24.769531 C 9.671875 25.492188 8.96875 23.160156 8.96875 23.160156 C 8.421875 21.773438 7.636719 21.402344 7.636719 21.402344 C 6.546875 20.660156 7.71875 20.675781 7.71875 20.675781 C 8.921875 20.761719 9.554688 21.910156 9.554688 21.910156 C 10.625 23.746094 12.363281 23.214844 13.046875 22.910156 C 13.15625 22.132813 13.46875 21.605469 13.808594 21.304688 C 11.144531 21.003906 8.34375 19.972656 8.34375 15.375 C 8.34375 14.0625 8.8125 12.992188 9.578125 12.152344 C 9.457031 11.851563 9.042969 10.628906 9.695313 8.976563 C 9.695313 8.976563 10.703125 8.65625 12.996094 10.207031 C 13.953125 9.941406 14.980469 9.808594 16 9.804688 C 17.019531 9.808594 18.046875 9.941406 19.003906 10.207031 C 21.296875 8.65625 22.300781 8.976563 22.300781 8.976563 C 22.957031 10.628906 22.546875 11.851563 22.421875 12.152344 C 23.191406 12.992188 23.652344 14.0625 23.652344 15.375 C 23.652344 19.984375 20.847656 20.996094 18.175781 21.296875 C 18.605469 21.664063 18.988281 22.398438 18.988281 23.515625 C 18.988281 25.121094 18.976563 26.414063 18.976563 26.808594 C 18.976563 27.128906 19.191406 27.503906 19.800781 27.386719 C 24.566406 25.796875 28 21.300781 28 16 C 28 9.371094 22.628906 4 16 4 Z "></path>
            </svg>
          </a>
        </div>
      </div>
      <div class="footer-copyright">
        <div class="footer-copyright-wrapper">
          <p class="footer-copyright-text">
            <a class="footer-copyright-link" href="#" target="_self"> ©2020. | Designed By: Pooja Nahelia. | All rights reserved. </a>
          </p>
        </div>
      </div>
    </footer>
  </div>

  <script defer type="text/javascript" src="../../js/app.js"></script>
  </body>
</html>