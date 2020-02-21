<?php 
    require_once 'header.php';
?>

<form action="../index.php" method="post" ectype="multipart/form-data">

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre">
    </div>
    <div class="form-group">
        <label for="nombre">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido">
    </div>

    <div class="form-group">
        <label for="nombre">Email</label>
        <input type="email" class="form-control" id="correo" name="correo">
    </div>

    <div class="form-group">
        <label for="nombre">Foto</label>
        <input type="text" class="form-control" id="foto" name="foto">
    </div>

    <button name="accion" value="agregar" type="submit" class="btn btn-success">Agregar Empleado</button>

</form>

<?php 
    require_once 'footer.php';
?>