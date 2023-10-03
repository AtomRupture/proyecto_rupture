<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/ee3d08c0a8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style_shop.css">
    <link rel="stylesheet" href="css/style-responsive.css">
	<script src="tienda.js" async></script>
    <title>Tienda</title>
</head>

<?php include './php/modulos/header.php' ?>
<body>


<section class="sec1">

<div class="slider__warpper">
  <div class="flex__container flex--pikachu flex--active" data-slide="1">
    <div class="flex__item flex__item--left">
      <div class="flex__content">
        <p class="text--sub"> Pre entreno, creatina limpia</p>
        <h1 class="text--big">NitroShock</h1>
        <p class="text--normal">es una avanzada fórmula de rápida absorción que combina los aminoácidos mas degradados por el músculo durante la actividad física; Los BCAA que son transformados en energía durante la actividad física y la L-Glutamina que es el 60% de la masa muscular.</p>
      </div>
      <p class="text__background">NitroShock</p>
    </div>
    <div class="flex__item flex__item--right"></div>
    <img class="pokemon__img" src="./img/nitro_shock.png" />
  </div>
  <div class="flex__container flex--piplup animate--start" data-slide="2">
    <div class="flex__item flex__item--left">
      <div class="flex__content">
        <p class="text--sub">Pre Entrenos</p>
        <h1 class="text--big">Burner Stack</h1>
        <p class="text--normal">es un producto de última generación diseñado para ayudar a cumplir tus objetivos facilmente, contiene los ingredientes más estudiados y con eficacia comprobada.</p>
      </div>
      <p class="text__background">Burner Stack</p>
    </div>
    <div class="flex__item flex__item--right"></div>
    <img class="pokemon__img" src="./img/burner_stack.png" />
  </div>
  <div class="flex__container flex--blaziken animate--start" data-slide="3">
    <div class="flex__item flex__item--left">
      <div class="flex__content">
        <p class="text--sub">Hipercaloricas</p>
        <h1 class="text--big">Creatine Power</h1>
        <p class="text--normal">r es la mejor proteína de suero, hipercalórica que incluye en su innovadora fórmula 3000 mg de Creatina, HMB, BCAA, 44g de Proteína, 1080 calorías por porción y fuentes de Carbohidratos con diferentes velocidades de absorción.</p>
      </div>
      <p class="text__background">Power</p>
    </div>
    <div class="flex__item flex__item--right"></div>
    <img class="pokemon__img" src="./img/creatine_megaplex.png" />
  </div>
  <div class="flex__container flex--dialga animate--start" data-slide="4">
    <div class="flex__item flex__item--left">
      <div class="flex__content">
        <p class="text--sub">Creatina Limpia</p>
        <h1 class="text--big">Legacy</h1>
        <p class="text--normal">Te ayudara para mejorar tu capacidad física en deportes de fuerza, potencia, resistencia anaeróbica; con la capacidad de recuperarte muy bien entre serie y serie. La suplementación con creatina no sólo es segura, también posiblemente beneficiosa con respecto a la prevención y recuperación de lesiones deportivas, concepto publicado y verificado por diferentes estudios.</p>
      </div>
      <p class="text__background">Legacy</p>
    </div>
    <div class="flex__item flex__item--right"></div>
    <img class="pokemon__img" src="./img/legacy2.png" />
  </div>
  <div class="flex__container flex--zekrom animate--start" data-slide="5">
    <div class="flex__item flex__item--left">
      <div class="flex__content">
        <p class="text--sub">Proteina Limpia</p>
        <h1 class="text--big">Whey Isolate</h1>
        <p class="text--normal">0.88 oz de aislado de proteína de suero; 0.19 oz de BCAA; solo 0.04 oz de azúcar y 0.04 oz de grasa; sin gluten; sustancias prohibidas probadas</p>
      </div>
      <p class="text__background">Isolate</p>
    </div>
    <div class="flex__item flex__item--right"></div>
    <img class="pokemon__img" src="./img/isolate.png" />
  </div>
</div>

<div class="slider__navi">
  <a href="#" class="slide-nav active" data-slide="1">NitroShock</a>
  <a href="#" class="slide-nav" data-slide="2">piplup</a>
  <a href="#" class="slide-nav" data-slide="3">blaziken</a>
  <a href="#" class="slide-nav" data-slide="4">dialga</a>
  <a href="#" class="slide-nav" data-slide="5">zekrom</a>
</div>

<script src='https://code.jquery.com/jquery-2.2.4.min.js'></script><script  src="./script.js"></script>

</section> <br><br>

<section class="contenedor">

<div>   <center> <h1>Nuestros Productos</h1> 
        <h2>Definicion</h2>
        </center>
  
	
	<body>
	
        <!-- Contenedor de elementos -->

    <section class="contenedor">
        <!-- Contenedor de elementos -->
        <div class="contenedor-items">
            <div class="item">
                <span class="titulo-item">Whey Pure</span>
                <img src="img/whey_pure.png" alt="" class="img-item">
                <span class="precio-item">$140.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Burner Stack</span>
                <img src="img/burner_stack.png" alt="" class="img-item">
                <span class="precio-item">$140.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item"> Isolate</span>
                <img src="img/isolate.png" alt="" class="img-item">
                <span class="precio-item">$435.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Best protein</span>
                <img src="img/best_protein.png" alt="" class="img-item">
                <span class="precio-item">$199.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Creatine Power</span>
                <img src="img/creatine_megaplex.png" alt="" class="img-item">
                <span class="precio-item">$60.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Nitro Shock</span>
                <img src="img/nitro_shock.png" alt="" class="img-item">
                <span class="precio-item">$99.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Legacy</span>
                <img src="img/legacy.png" alt="" class="img-item">
                <span class="precio-item">$110.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Proteina Titan</span>
                <img src="./img/titan.png" alt="" class="img-item">
                <span class="precio-item">$60.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Gold Standar Isolate</span>
                <img src="./img/gold_standar.png" alt="" class="img-item">
                <span class="precio-item">$369.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Smart Gainner 13lb</span>
                <img src="./img/smartpro.png" alt="" class="img-item">
                <span class="precio-item">$300.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Super Mass Gainner 12lb</span>
                <img src="./img/massgain.png" alt="" class="img-item">
                <span class="precio-item">$430.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">ISO 100 Dymatize 5lb</span>
                <img src="./img/iso100.png" alt="" class="img-item">
                <span class="precio-item">$110.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Shield Prosciense</span>
                <img src="./img/shield.png" alt="" class="img-item">
                <span class="precio-item">$110.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Shield Prosciense</span>
                <img src="./img/masstech.png" alt="" class="img-item">
                <span class="precio-item">$245.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Nutritional Shake</span>
                <img src="./img/batido.png" alt="" class="img-item">
                <span class="precio-item">$70.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
                        <div class="item">
                <span class="titulo-item">Burner stack lata x24</span>
                <img src="./img/burnerlata.png" alt="" class="img-item">
                <span class="precio-item">$190.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">collagen stack </span>
                <img src="./img/collagen.png" alt="" class="img-item">
                <span class="precio-item">$100.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Bipro Classic 3lb </span>
                <img src="./img/biprocl.png" alt="" class="img-item">
                <span class="precio-item">$210.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Bipro Mass 3lb </span>
                <img src="./img/bipromass.png" alt="" class="img-item">
                <span class="precio-item">$200.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            <div class="item">
                <span class="titulo-item">Protein black magic </span>
                <img src="./img/blackprotein.png" alt="" class="img-item">
                <span class="precio-item">$190.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div>
            

            <!-- <div class="item"> -->
                <!-- <span class="titulo-item">BiPro Classic</span>
                <img src="img/bipro.png" alt="" class="img-item">
                <span class="precio-item">$155.000</span>
                <button class="boton-item">Agregar al Carrito</button>
            </div> -->
        </div>
        <!-- Carrito de Compras -->
        <div class="carrito" id="carrito">
            <div class="header-carrito">
                <h2>Tu Carrito</h2>
            </div>

            <div class="carrito-items">
                <!-- 
                <div class="carrito-item">
                    <img src="img/boxengasse.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Box Engasse</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="1" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$15.000,00</span>
                    </div>
                   <span class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </span>
                </div>
                <div class="carrito-item">
                    <img src="img/skinglam.png" width="80px" alt="">
                    <div class="carrito-item-detalles">
                        <span class="carrito-item-titulo">Skin Glam</span>
                        <div class="selector-cantidad">
                            <i class="fa-solid fa-minus restar-cantidad"></i>
                            <input type="text" value="3" class="carrito-item-cantidad" disabled>
                            <i class="fa-solid fa-plus sumar-cantidad"></i>
                        </div>
                        <span class="carrito-item-precio">$18.000,00</span>
                    </div>
                   <button class="btn-eliminar">
                        <i class="fa-solid fa-trash"></i>
                   </button>
                </div>
                 -->
            </div>
            <div class="carrito-total">
                <div class="fila">
                    <strong>Tu Total</strong>
                    <span class="carrito-precio-total">
                        $120.000,00
                    </span>
                </div>
                <button class="btn-pagar">Pagar <i class="fa-solid fa-bag-shopping"></i> </button>
            </div>
        </div>
    </section>
		
		<script type="text/javascript" src="product-listing.js"></script>
	</body>
	



<script defer type="text/javascript" src="./js/tienda.js"></script>


</body>

<?php include './php/modulos/footer_def.php' ?>

</html>