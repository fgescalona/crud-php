<?php 
    require_once 'header.php';

    if ($_REQUEST['usuario'])
        $usuario = $_REQUEST['usuario'];
        
?>

<form action="#" method="post" ectype="multipart/form-data">

    <div class="form-group">
        <label for="nombre">Nombre</label>
        <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $usuario['nombre']; ?>">
    </div>
    <div class="form-group">
        <label for="nombre">Apellido</label>
        <input type="text" class="form-control" id="apellido" name="apellido" value="<?php echo $usuario['apellido']; ?>">
    </div>

    <div class="form-group">
        <label for="nombre">Email</label>
        <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $usuario['correo']; ?>">
    </div>

    <div class="form-group">
        <label for="nombre">Foto</label>
        <input type="text" class="form-control" id="foto" name="foto" value="<?php echo $usuario['foto']; ?>">
    </div>

    <input type="hidden" id="id" name="id" value="<?php echo $usuario['id']; ?>">

    <button name="accion" value="actualizar" type="submit" class="btn btn-success">Actualizar</button>

</form>

<?php 
    require_once 'footer.php';
?>