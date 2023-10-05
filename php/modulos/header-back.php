<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script defer src="https://kit.fontawesome.com/49b40f8ce6.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/49b40f8ce6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="stylesheet" href="\proyecto_rupture\css\style-responsive.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="shortcut icon" href="\proyecto_rupture\img\unnamed.png">
    <?php
        error_reporting(0);
        include '../modulos/loader.php' 
        ?>
    <style>
            
        header{
            display: flex;
            align-items: center;
            justify-content: space-between;
            width: 100%;
            height: 5.5rem;
            position: fixed;
            z-index: 9;
            color: white;
        }
        header button{
            margin-left: 2rem !important;
            background-color: transparent !important;
            border: none !important;
            color: white;
            cursor: pointer;
        }

    
        </style>
    <script defer src="\proyecto_rupture\js\app.js"></script>
    <title>Header</title>
</head>
<body>
<body onscroll="Camb()">
    <header id="headt"> 
           <button onclick="header_ba()"><span class="material-symbols-outlined">
        arrow_back
        </span>
    </button>
    </header>

</body>
</html>
