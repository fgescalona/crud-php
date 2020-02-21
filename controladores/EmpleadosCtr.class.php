<?php

    require_once 'modelos/Empleados.class.php';
    
    class EmpleadosCtr
    {
        private $modelo;
        
        public function __construct()
        {
            $this->modelo = new Empleados();
        }

        public function listar()
        {

            $usuarios = $this->modelo->obtenerUsuarios();
            $_POST['usuarios'] = $usuarios;

            require_once 'vistas/lista.php';
        }

        public function editar($id)
        {

            $usuario = $this->modelo->obtenerUsuario($id);
            $_POST['usuario'] = $usuario;

            require_once 'vistas/editar.php';
        }

        public function eliminar($id)
        {
            $eliminar = $this->modelo->eliminar($id);

            $this->listar();
        }

        public function agregar()
        {

            if ($_POST) {

                array_pop($_POST);

                foreach ($_POST as $llave => $valor) {
                    $cadena .= "'" . $valor . "',";
                }

                $valores = trim($cadena, ',');

                $insertar = $this->modelo->agregar($valores);
                

                $this->listar();
            } 
        }
    }
    