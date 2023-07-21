<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_shop.css">
    <title>Tienda</title>
</head>
<body>
<?php include './php/modulos/header_tienda.php' ?>

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

<section class="sec2">

<div>   <center> <h1>Nuestros Productos</h1> 
        <h2>Definicion</h2>
        </center>
  
	
	<body>
		<ul class="l-items">
			<li class="item">
				<button class="item-add">Añadir</button>
				<img src="./img/whey_pure.png" alt="">
				<p class="item-description">Suplemento de proteína aislada del suero de la leche, con un nivel de pureza del 87%, que aporta solo 106 calorías y 26g de proteína.</p>
				<h4 class="item-name">Whey Pure 2lb</h4>
				<h5 class="item-price">$<span class="price">150.000</span></h5>
			</li>
			<li class="item">
				<button class="item-add">Add to Cart</button>
				<img src="http://placehold.it/270x270" alt="">
				<p class="item-description">This is an item description. Interesting content about the item will go here.</p>
				<h4 class="item-name">Awesome Swag</h4>
				<h5 class="item-price">$<span class="price">15.00</span></h5>
			</li>
			<li class="item">
				<button class="item-add">Add to Cart</button>
				<img src="http://placehold.it/270x270" alt="">
				<p class="item-description">This is an item description. Interesting content about the item will go here.</p>
				<h4 class="item-name">An Item Name Here</h4>
				<h5 class="item-price">$<span class="price">3.50</span></h5>
			</li>
			<li class="item">
				<button class="item-add">Add to Cart</button>
				<img src="http://placehold.it/270x270" alt="">
				<p class="item-description">This is an item description. Interesting content about the item will go here.</p>
				<h4 class="item-name">An Item Name Here</h4>
				<h5 class="item-price">$<span class="price">5.00</span></h5>
			</li>
			<li class="item">
				<button class="item-add">Add to Cart</button>
				<img src="http://placehold.it/270x270" alt="">
				<p class="item-description">This is an item description. Interesting content about the item will go here.</p>
				<h4 class="item-name">Cool Item Name</h4>
				<h5 class="item-price">$<span class="price">15.00</span></h5>
			</li>
			<li class="item">
				<button class="item-add">Add to Cart</button>
				<img src="http://placehold.it/270x270" alt="">
				<p class="item-description">This is an item description. Interesting content about the item will go here.</p>
				<h4 class="item-name">An Item Name Here</h4>
				<h5 class="item-price">$<span class="price">15.00</span></h5>
			</li>
			<li class="item">
				<button class="item-add">Add to Cart</button>
				<img src="http://placehold.it/270x270" alt="">
				<p class="item-description">This is an item description. Interesting content about the item will go here.</p>
				<h4 class="item-name">An Item Name Here</h4>
				<h5 class="item-price">$<span class="price">15.00</span></h5>
			</li>
			<li class="item">
				<button class="item-add">Add to Cart</button>
				<img src="http://placehold.it/270x270" alt="">
				<p class="item-description">This is an item description. Interesting content about the item will go here.</p>
				<h4 class="item-name">Expensive Item</h4>
				<h5 class="item-price">$<span class="price">99.00</span></h5>
			</li>
			<li class="item">
				<button class="item-add">Add to Cart</button>
				<img src="http://placehold.it/270x270" alt="">
				<p class="item-description">This is an item description. Interesting content about the item will go here.</p>
				<h4 class="item-name">An Item Name Here</h4>
				<h5 class="item-price">$<span class="price">25.00</span></h5>
			</li>
			<li class="item">
				<button class="item-add">Add to Cart</button>
				<img src="http://placehold.it/270x270" alt="">
				<p class="item-description">This is an item description. Interesting content about the item will go here.</p>
				<h4 class="item-name">An Item Name Here</h4>
				<h5 class="item-price">$<span class="price">15.00</span></h5>
			</li>
		</ul>
		<button class="hide" id="display-cart">Display Cart</button>

		<div class="shop-cart hide">
			<h3 class="cart-total">Subtotal</h3>
			<h5 class="cart-total-num">$<span class="price">45.00</span></h5>
			<ul class="shop-cart-list">
			</ul>
			<div class="cart-promo">
				<a href="" class="cart-item-promo">Enter Valid Promo Code</a>
				<input type="text" class="cart-item-promocode" placeholder="">
				<div class="cart-item-price">$<span class="price">0.00</span></div>
			</div>
			<button id="keep-shopping">Keep Shopping</button>
			<button id="checkout"> Checkout </button>
		</div>
		
		<script type="text/javascript" src="product-listing.js"></script>
	</body>



<script defer type="text/javascript" src="./js/tienda.js"></script>


    
</body>
</html>