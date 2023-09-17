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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="./img/unnamed-removebg-preview.svg">
    <link rel="stylesheet" href="css/style_landing_rutinas.css">
    <title>Rutinas</title>
</head>
<body>

<?php include './php/modulos/header.php' ?>

<section class="showcase">
			<div class="video-container">
				<video src="video/fondo_landing2.mp4" autoplay muted loop></video>
			</div>
			<div class="content">
				<h1>Rutinas Atom</h1>
				<h4>Oportunidad para el cambio</h4>
                <div class="bt">
                <button class="emp-ahr" onclick="alerta();">
                    EMPIEZA AHORA
                </button>
            </div>
			</div>
		</section>

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
    
</body>
</html>