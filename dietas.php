<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/49b40f8ce6.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="./css/style_dietas.css">
	<link rel="stylesheet" href="./css/style.css">
    
    <title>Dietas</title>
</head>
<?php include './php/modulos/header.php' ?>
<?php include './php/modulos/loader.php' ?>
<body>
    
<section class="sect1">

<div class="flex-container">

	<div class="flex-slide home">
		<div class="flex-title flex-title-home"><a style="color:white;" href="bajar_peso.php">Bajar Peso</a></div>
		<div class="flex-about flex-about-home"><p>Click here to navigate to the home section of the website</p></div>
	</div>
	<div class="flex-slide about">
		<div class="flex-title"><a style="color:white;" href="Ganar_masa.php">Ganar Masa</a></div>
		<div class="flex-about"><p>Click here to navigate to the About section of the website</p></div>
	</div>
	<div class="flex-slide work">
		<div class="flex-title"><a style="color:white;" href="Mantener_peso.php">Mantener peso</a></div>
		<div class="flex-about"><p>Listing relevant snippets of work:</p>
			<ul>
				<li>First piece of work</li>
				<li>Second piece of work</li>
				<li>Third piece of work</li>
			</ul>
		</div>
	</div>
	<div class="flex-slide home">
		<div class="flex-title flex-title-home"><a style="color:white;" href="subir_peso.php">Subir Peso</a></div>
		<div class="flex-about flex-about-home"><p>Click here to navigate to the home section of the website</p></div>
	</div>

</div>


</section>

</body>

<?php include './php/modulos/footer_def.php'?>
<script defer type="text/javascript" src="js/dietas.js"></script>
</html>