<?php

include "./conexion.php";

if (isset($_GET['edit'])) {
    $edit = $_GET['edit'];

    // Resto del código...
} else {
    echo "El valor edit no funciona";
}

$resultado = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario = '$edit'") or die("Problemas en el Select".mysqli_error($conexion));



?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar info</title>
    <link rel="stylesheet" href="../css/style-admin.css">
    <style>.card-front, .card-back {display: grid !important; height: 173% !important; text-align: center;
    align-items: center; left: 27rem !important; top: 2rem !important;} .center-wrap{padding: 0rem !important;} .section {
    width: 90% !important;} body{ height: 120vh !important;} .btn{ margin-bottom: 0rem !important;}
        </style>
</head>
<body>

    <?php include "./modulos/header-back.php"?>
    <div class="section">
    <div class="container">
      <div class="row full-height justify-content-center">
        <div class="col-12 text-center align-self-center py-5">
          <div class="section pb-5 pt-5 pt-sm-2 text-center">
            <h6 class="mb-0 pb-3">
            <label for="reg-log"></label>
            <div class="card-3d-wrap mx-auto">
              <div class="card-3d-wrapper">
                <div class="card-front">
                  <div class="center-wrap">
    <form action="./actualizar_usu.php" method="post" class="act">

        <?php

            while ($row = mysqli_fetch_assoc($resultado)) {  ?>
            
            <div class="section text-center">
                    <h2 class="mb-4 pb-3">Actualizar
                    </h2>
                    <div class="form-group mt-2">
                        <label for="">Nombre</label>
                        <br>
                        <input type="text" name="nom" value="<?php echo $row['nombre']; ?>">
                        </div>
                <br>
                    <br>
                    <div class="form-group mt-2">
                        <label for="">telefono</label>
                        <br>
                        <input type="text" name="tel" value="<?php echo $row['telefono']; ?>">
                        </div>
                    <br>
                    <div class="form-group mt-2">
                        <label for="">correo</label>
                        <br>
                        <input type="text" name="cor" value="<?php echo $row['correo']; ?>">
                        </div>
                    <br>
                    <div class="form-group mt-2">
                        <label for="">Contraseña</label>
                        <br>
                        <input type="text" name="pass" value="<?php echo $row['pass']; ?>">
                        </div>
                        <br>
                        <div class="form-group mt-2">
                        <label for="">Tipo</label>
                        <br>
                        <input type="text" name="pass" value="<?php echo $row['tipo']; ?>">
                        </div>
                    <button type="submit" class="btn mt-4" name="enviar">Actulizar</button>
                    </form>

                  </div>


        <?php
            }

        ?>

    </form>
    <?php include "./php/footer.php" ?>
</body>
</html>