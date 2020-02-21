<?php

    require_once 'conexion/Conexion.class.php';

    class Empleados
    {
        private $db;
    
        public function __construct()
        {
            $this->db = Conexion::conexion();
        }

        public function agregar($valores)
        {

            $sql = "INSERT INTO empleados
                        (nombre, apellido, correo, foto)
                    VALUES
                        ($valores)";

            $query = $this->db->prepare($sql);
            $respuesta = $query->execute();

            return $respuesta;
        }

        public function eliminar($id)
        {

            $sql = "DELETE FROM empleados WHERE id = $id";

            $query = $this->db->prepare($sql);
            $respuesta = $query->execute();

            return $respuesta;
        }

        public function obtenerUsuarios()
        {

            $sql = "SELECT * FROM empleados";
            $usuarios = $this->db->query($sql)->fetchAll(PDO::FETCH_ASSOC);

            return $usuarios;
        }

        public function obtenerUsuario($id)
        {

            $sql       = "SELECT * FROM empleados WHERE id = $id LIMIT 1";
            $query     = $this->db->prepare($sql);
            $query->execute();
            $usuario   = $query->fetch(PDO::FETCH_ASSOC);

            return $usuario;
        }
    }