<?php

    require_once 'controladores/EmpleadosCtr.class.php';

    $accion = '';
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

        case 'actualizar':
            $datosUsuario = $_REQUEST;
            $controlador->actualizar($datosUsuario);
            break;

        case 'eliminar':
            $id = $_REQUEST['id'];
            $controlador->eliminar($id);
            break;
        
        default:
            $controlador->listar();
            break;
    }


