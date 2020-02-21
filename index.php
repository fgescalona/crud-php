<?php

    require_once 'controladores/EmpleadosCtr.class.php';
    $controlador = new EmpleadosCtr();
    
    if ($_REQUEST)
        $accion = $_REQUEST['accion'];

    switch ($accion) {
        case 'agregar':
            $controlador->agregar($_POST);
            break;
        
        case 'editar':
            $id = $_REQUEST['id'];
            $controlador->editar($id);
            break;

        case 'eliminar':
            $controlador->editar($_POST);
            break;
        
        default:
            $controlador->listar();
            break;
    }


