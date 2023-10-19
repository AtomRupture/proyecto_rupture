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
include "../modulos/loader.php";

include "../modulos/mensaje.php"
?>
    <style>
            
header {
  display: flex !important;
  align-items: center !important;
  justify-content: space-between !important;
  width: 100% !important;
  height: 4.5rem !important;
  position: fixed !important;
  z-index: 9 !important;
  color: white !important;
  background-color: transparent !important;
}

header button {
  margin-left: 1.4rem !important;
  background-color: transparent !important;
  border: none !important;
  color: white !important;
  cursor: pointer !important;
}

        </style>
    <title>Header</title>
</head>
<body>
    <header id="headt"> 
           <button onclick="back2()"><span class="material-symbols-outlined">
        arrow_back
        </span>
    </button>
    </header>
<script>
function back2(){
  window.history.back();
};
</script>
</body>
</html>
