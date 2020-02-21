<?php 
    require_once 'header.php';

    $usuarios = $_POST['usuarios'];

?>
    <div>
        <a href="vistas/agregar.php" class="btn btn-success">Agregar Empleado</a>
    </div>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Apellido</th>
                <th scope="col">Correo</th>
                <th scope="col">Foto</th>
                <th scope="col"></th>
                <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            <?php
                foreach ($usuarios as $llave => $arregloUsuario) {
            ?>
                <tr>
                    <?php 
                        foreach ($arregloUsuario as $llaveUsuario => $valor) {
                    ?>
                        <td>
                            <?php echo $valor; ?>
                        </td>
                    <?php
                        }
                    ?>
                    <td>
                        <a href="index.php?accion=editar&id=<?php echo $usuarios[$llave]['id'] ?>" class="btn btn-primary">Editar</a>
                    </td>
                    <td>
                        <button name="accion" value="eliminar" class="btn btn-danger">Eliminar</button>
                    </td>
                </tr>
            <?php
                }
            ?>
        </tbody>
    </table>

<?php 
    require_once 'footer.php';
?>