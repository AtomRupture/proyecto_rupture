<?php 
error_reporting(0);
include "../php/conexion.php";

$sql1 = "SELECT COUNT(*) AS num_admins FROM usuarios WHERE tipo = 'admin'";
$resultado = mysqli_query($conexion, $sql1);

$fila = mysqli_fetch_assoc($resultado);

$num_admins = $fila["num_admins"];

$sql2 = "SELECT COUNT(*) AS num_user FROM usuarios WHERE tipo = 'user'";
$resultado2 = mysqli_query($conexion, $sql2);

$fila = mysqli_fetch_assoc($resultado2);

$num_user = $fila["num_user"];

$sql3 = "SELECT COUNT(*) AS num_pro FROM productos_a";
$resultado3 = mysqli_query($conexion, $sql3);

$fila = mysqli_fetch_assoc($resultado3);

$num_pro = $fila["num_pro"];

?>
<!DOCTYPE html>
<html lang="es-co">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <title>Atom admin</title>
    <link href="https://fonts.googleapis.com/css2?family=Ubuntu&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link rel="shortcut icon" href="../../img/unnamed.png">
    <link rel="stylesheet" href="../css/style-admin.css">
  </head>
  <body>
  <?php include "./modulos/loader.php" ?>
    <div class="grid-container">

      <!-- Header -->
      <header class="header">
        <div class="menu-icon" onclick="openSidebar()">
          <span class="material-icons-outlined">menu</span>
        </div>
        <div class="header-left">
          <button onclick="se()"><span class="material-icons-outlined">search</span><h4 class="bust">Buscador...</h4></button>
          <div id="bus">

          </div>
        </div>
        <!-- <div class="header-right">
          <span class="material-icons-outlined">notifications</span>
          <span class="material-icons-outlined">email</span>
          <span class="material-icons-outlined">account_circle</span>
        </div> -->
      </header>
      <!-- End Header -->

      <!-- Sidebar -->
      <aside id="sidebar">
        <div class="sidebar-title">
          <div class="sidebar-brand">
            <button><span><img src="../img/admin-l.png" class="logo"></span></button><br> 
          </div>
          <span class="material-icons-outlined" id="X" onclick="closeSidebar()">close</span>
        </div>

        <ul class="sidebar-list">
          <li class="sidebar-list-item">
            <a href="./pagina_admin.php">
              <span class="material-icons-outlined">dashboard</span> Panel
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="./formulario_p.php">
              <span class="material-icons-outlined">inventory_2</span>Registrar productos
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="./Tabladeusua.php">
              <span class="material-icons-outlined">groups</span> Usuarios
            </a>
          </li>
          <li class="sidebar-list-item">
            <a href="./user/user_index.php" target="_blank">
              <span class="material-icons-outlined">keyboard_return</span> Ir a principal
            </a>
          </li>
        </ul>
      </aside>
      <!-- End Sidebar -->

      <!-- Main -->
      <main class="main-container">
        <div class="main-title">
          <h2>Panel de administrador</h2>
        </div>

        <div class="main-cards">

          <div class="card">
            <div class="card-inner">
              <h3>PRODUCTOS</h3>
              <span class="material-icons-outlined">inventory_2</span>
            </div>
            <h1><?php echo $num_pro ?></h1>
          </div>
          <div class="card">
            <div class="card-inner">
              <h3>Usuarios</h3>
              <span class="material-icons-outlined">groups</span>
            </div>
            <h1><?php echo $num_user  ?></h1>
          </div>

          <div class="card">
            <div class="card-inner">
              <h3>Administradores</h3>
              <span class="material-icons-outlined">admin_panel_settings</span>
            </div>
            <h1> <?php echo $num_admins  ?></h1>
          </div>

        </div>
<!-- 
        <div class="charts">

          <div class="charts-card">
            <h2 class="chart-title">Top 5 Products</h2>
            <div id="bar-chart"></div>
          </div>

          <div class="charts-card">
            <h2 class="chart-title">Purchase and Sales Orders</h2>
            <div id="area-chart"></div>
          </div>

        </div> -->
      </main>
      <!-- End Main -->

    </div>

    <!-- Scripts -->
    <!-- ApexCharts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/apexcharts/3.35.5/apexcharts.min.js"></script>
    <!-- Custom JS -->
    <script src="../js/app.js"></script>
  </body>
</html>