<?php

$frutas = [
    "manzana",
    "pera",
    "naranja",
];

// Acceder a un elemento
echo $frutas[1];

// Modificar un elemento de la matriz
echo "<br>";
$frutas[0] = "uva";
echo $frutas[0];

// Agregar nuevo elemento
$frutas[] = "manzana";

echo "<br>";
echo "<pre>";
print_r( $frutas );
echo "</pre>";

$persona = [
    "nombre" => "Juan",
    "apellido" => "Perez",
    "edad" => 25,
];

// Acceder un elemento
echo $persona["nombre"];

// Modificar el contenido
$persona["nombre"] = "Pedro";
echo $persona["nombre"];

// Añadir un nuevo elemento
$persona["telefono"] = "123456789";

echo "<br>";
echo "<pre>";
print_r($persona);
echo "</pre>";

// Tarea: Buscar como eliminar elementos de un arreglo y como ordenarlos