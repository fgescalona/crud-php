<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD de Empleados con PHP</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</head>
<body>
    
    <div class="container">
        <form action="" method="post" ectype="multipart/form-data">


            <label for="">Nombre</label>
            <input type="text" name="nombre" placeholder="Nombre" id="nombre" require="">
            <br>

            <label for="">Apellido</label>
            <input type="text" name="apellido" placeholder="" id="apellido" require="">
            <br>

            <label for="">Correo</label>
            <input type="text" name="correo" placeholder="" id="correo" require="">
            <br>

            <label for="">Foto</label>
            <input type="text" name="foto" placeholder="" id="foto" require="">
            <br>

            <button value="agregar" type="submit" name="action">Agregar</button>
            <button value="editar" type="submit" name="action">Editar</button>
            <button value="eliminar" type="submit" name="action">Eliminar</button>
            <button value="cancelar" type="submit" name="action">Modificar</button>

        </form>
    </div>

</body>
</html>

