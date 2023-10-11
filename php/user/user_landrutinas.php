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
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="\proyecto_rupture\img\unnamed.png">
    <link rel="stylesheet" href="../../css/style_landing_rutinas.css">
    <title>Rutinas</title>
</head>
<body>

<?php include '../modulos/header-af.php' ?>

<section class="showcase">
			<div class="video-container">
				<video src="../../video/landing_rutinas.mp4" autoplay muted loop></video>
			</div>
			<div class="content">
				<h1>Rutinas Atom</h1>
				<h4>Oportunidad para el cambio</h4>
                <div class="bt">
                <button class="emp-ahr" onclick="mostrar();">
                    EMPIEZA AHORA
                </button>
            </div>
			</div>
		</section>
        
        <?php include '../modulos/footer_def.php' ?>
        
        <script>
        function mostrar(){
        Swal.fire({
        title: 'Haz parte!',
        text: 'Empieza el cambio con nuestras rutinas',
        imageUrl: '../../img/rutinas/alertaLandRutinas.jpg',
        imageWidth: 400,
        imageHeight: 200,
        imageAlt: 'Custom image',
                showCancelButton: true,
        confirmButtonText:
                    '<a href="rutinas.php"><i class="fa fa-thumbs-up"></i> Vamos!</a>',
                confirmButtonAriaLabel: 'Thumbs up, great!'
        })
        }
    </script>
    
</body>
</html>