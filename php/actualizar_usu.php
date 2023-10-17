<?php 

    include "./conexion.php";

    $consulta = ("UPDATE `usuarios` SET `id_usuario`='$_POST[idu]', `nombre`='$_POST[nom]',`telefono`='$_POST[tel]',`correo`='$_POST[cor]',`pass`='$_POST[pass]',`tipo`='$_POST[tipo]' WHERE `id_usuario`='$_POST[idu]'");

    $resultado = mysqli_query($conexion, $consulta);

    if($resultado){
        echo "<script>
        
            alert('El usuario se actualizó correctamente');

            location.href='./pagina_admin.php';

        </script>";
    }

    mysqli_close($conexion);
?>
                   <div class="form-group mt-2">
                        <label for="">Nombre</label>
                        <input type="text" name="nom" value="<?php echo $row['nombre']; ?>">
                        </div>
                <br>