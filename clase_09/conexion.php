<?php

# Datos de conexión a la base de datos
$db_host = "localhost";
$db_name = "escuela";
$db_user = "root";
$db_pass = "";

// Crear conexion de manera procedural
$conexion = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Verificar conexion
if (!$conexion){
    die("Conexion fallida: " . mysqli_connect_error());
}