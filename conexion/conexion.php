<?php

    $servername = "localhost";
    $dbname     = "empresa";
    $username   = "root";
    $password   = "";

    try {
        $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        echo "Conectado a la BD";
    } catch(PDOException $e) {
        echo "Error conectando a la base de datos: " . $e->getMessage();
    }