<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style_shop.css">
    <script defer type="text/javascript" src="./js/tienda.js"></script>
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

<div>   <center> <h1>Nuestros Productos</h1> </center>
        <h2>Definicion</h2>
        
        <button id='cart-button' class="trigger cart-button-style">Show Cart</button>
        
        
        <div id="shop">
            
            <div class="product Whey pure" id="iphone-x">
                <img class="product-image" src="./img/whey_pure.png">
                <p class="product-name">Whey Pure 2lb</p>
                <p class="product-description">Proteina limpia de 2LB</p>
                <p class="product-price" value='155000'>155.000</p>
                <button class="add-to-cart" id='test'>Añadir al carrito</button>
            </div>
            
            <div class="products android samsung" id="samsung-s9">
                <img class="product-image" src="http://via.placeholder.com/200x200">
                <p class="product-name">Samsung S9</p>
                <p class="product-description">The most powerful Android device on the planet.</p>
                <p class="product-price" value='789'>789</p>
                <button class="add-to-cart">ADD TO CART</button>
            </div>
            
            <div class="products android google" id="pixel-2">
                <img class="product-image" src="http://via.placeholder.com/200x200">
                <p class="product-name">Pixel 2</p>
                <p class="product-description">The perfect phone for a clean Android experience</p>
                <p class="product-price" value='876'>876</p>
                <button class="add-to-cart">ADD TO CART</button>
            </div>
            
            <div class="products android oneplus" id="oneplus-6">
                <img class="product-image" src="http://via.placeholder.com/200x200">
                <p class="product-name">Oneplus 6</p>
                <p class="product-description">The latest from a long line of affordable premium devices by Oneplus</p>
                <p class="product-price" value='799'>799</p>
                <button class="add-to-cart">ADD TO CART</button>
            </div>
            
            <div class="products ios apple" id="iphone-8">
                <img class="product-image" src="http://via.placeholder.com/200x200">
                <p class="product-name">iPhone 8</p>
                <p class="product-description">The little, less-stylish brother of the iPhone X.</p>
                <p class="product-price" value='719'>719</p>
                <button class="add-to-cart">ADD TO CART</button>
            </div>
            
            <div class="products android huawei" id="huawei-p20">
                <img class="product-image" src="http://via.placeholder.com/200x200">
                <p class="product-name">Huawei P20</p>
                <p class="product-description">A solid performer from the chinese giant Huawei.</p>
                <p class="product-price" value='769'>769</p>
                <button class="add-to-cart">ADD TO CART</button>
            </div>
            
            <div class="products android lg" id="lg-g7">
                <img class="product-image" src="http://via.placeholder.com/200x200">
                <p class="product-name">LG G7 ThinQ</p>
                <p class="product-description">The latest and most powerful smartphone from LG.</p>
                <p class="product-price" value='699'>699</p>
                <button class="add-to-cart">ADD TO CART</button>
            </div>
            
            <div class="products android huawei" id="huawei-mate-10-pro">
                <img class="product-image" src="http://via.placeholder.com/200x200">
                <p class="product-name">Huawei Mate 10 Pro</p>
                <p class="product-description">The most powerful Android device yet from Huawei.</p>
                <p class="product-price" value='899'>899</p>
                <button class="add-to-cart">ADD TO CART</button>
            </div>
        </div>
        
    </div>
        <div id='cart-wrapper' class="slider close">
            <div id='cart'>
                <div id="cart-products-wrapper">
                    <table id="cart-table">
                    <thead id="cart-table-header">
                         <th class="name-col">Product Name</th> 
                         <th class="quantity-col">Quantity</th>       
                         <th class="price-col">Price</th>
                         <th class="updated-price-col">Updated Price</th>
                         <th class="update-col">Update</th>
                         <th class="remove-col">Remove</th>
                    </thead>
                    <tbody id="cart-table-body"></tbody>
                    </table>
                </div>
            </div>
            
            <div id='amount-controls'>
                <div id="cart-amount-wrapper">
                    <table>
                        <tbody>
                            <tr id='subtotal-wrappper'>
                                <td id="subtotal-label">Subtotal:</td>
                                <td id="subtotal">0.00</td>
                            </tr>

                            <tr id='total-wrapper'>
                                <td id="total-label">Total:</td>
                                <td id="total">0.00</td>
                            </tr>

                            <tr id="promo-checkout">
                                <td id="promo-wrapper">
                                    <input id="promo" placeholder="Input Promo Code">
                                    <button id="apply-promo">Apply Promo</button>
                                </td>

                                <td>
                                    <button id="checkout">Checkout</button>
                                </td>
                                
                                <td>
                                    <button id="ks" class="keep-shopping">Keep Shopping</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </section>

</section>




    
</body>
</html>