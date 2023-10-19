<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Lista de Archivos </title>
 <link rel="stylesheet" href="css/estilo5.css">
</head>
<body>

<?php 

include "conexion.php";

?>
<h1> LISTA DE ARCHIVOS </h1>

<table border="1">
  <tr>
    <th> Codigo Imagen </th>
    <th> Nombre Imagen </th>
    <th> Archivo </th>
     <th> Imagen </th>
    <th colspan="2">Descargar </th>
  </tr>
    <tbody>
      <?php 

           $registros = mysqli_query($conexion,"SELECT * FROM galeria") or die("problemas en el select".mysqli_error($conexion));
           
           while ($row = mysqli_fetch_array($registros)){  ?>
          
           <tr>
                <td> <?php echo $row['id']?> </td>
                <td> <?php echo $row['nombre']?></td>
                <td> <?php echo $row['archivo']?> </td>
                <td><img width="40" src="archivos/<?php echo $row['archivo']; ?>"></td>
              <td> 
            <a download href="archivos/<?php echo $row['archivo']?>"> descargar</a>


          </td>
            

           </tr>
  


       <?php  } ?>

    </tbody>



</table>

<a href="index.php" class="button"> VOLVER  </a>
</body>
</html>
