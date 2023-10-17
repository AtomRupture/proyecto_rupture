<?php 

include "./conexion.php";

if(!empty($_POST)){
    $codm = $_POST['cod'];
    $q_elm = mysqli_query($conexion, "DELETE from usuarios WHERE id_usuario = '$codm'");
    if($q_elm){
     echo "<script> 
        alert('El usuario se a eliminado');
        location.href='./Tabladeusua.php';
        </script>";
    }else{
        echo "<script> 
                alert('Error al eliminar el usuario');
                location.href='./pagina_admin.php';
                </script>";
    }

     }

$del = $_GET['del'];

$resul = mysqli_query($conexion, "SELECT * FROM usuarios WHERE id_usuario='$del'") or die("Error al eliminar".mysqli_error($conexion));

while ($row = mysqli_fetch_array($resul)){

    $cod = $row['id_usuario'];
    $usuario = $row['nombre'];
    $pass = $row['pass'];
    
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style-admin.css">
    <style>body{height: 100vh !important;}.card-front, .card-back{display: grid !important; align-items: center !important; left: 27.5rem !important; top: 6rem !important;} input[type="submit"]{margin-bottom: 2rem !important;}</style>
    <title>Eliminar registro </title>
</head>
<body class="main3">
    <?php include '../php/modulos/header-back.php'?>
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
<form method="post" action="">
    <h3>Esta seguro de que quiere eliminar al siguiente usuario!!!</h3>
    <div class="dt">
    <?php echo "Id: ".$cod ?> 
    <br><br>
    <?php echo "Usuario: ".$usuario ?> 
    <br><br>
    <?php echo "Pass: ".$pass ?>
      </div>
    <br><br>
    <input type="hidden" name="cod" value="<?php echo $del; ?>">
    <input type="submit" value="Eliminar" style="color: red;" id="el">


</form>
</div>
</div>

    
</body>
</html>