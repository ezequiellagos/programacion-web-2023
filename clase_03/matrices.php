<?php

// Matrices - Arreglo

// Matriz indexada
$matriz = array("Juan", "Pedro", "María");
echo $matriz[2];

// Matrices asociatios
$matriz_2 = array(
    "NOMBRE" => "Juan", 
    "Apellido" => "Perez",
    "Edad" => 25
);
echo "<br>";
echo $matriz_2["NOMBRE"];

// Matriz multidimensional indexada
$matriz_3 = [
    array("Juan", "Perez", 25),
    array("Maria", "Lopez", 27),
];
echo "<br>";
echo $matriz_3[0][0];

// Matriz multidimensional asociativa
$matriz_4 = [
    'persona_1' => [
        "nombre" => "Juan",
        "apellido" => "Perez",
        "edad" => 25
    ],
    'persona_2' => [
        "nombre" => "Maria",
        "apellido" => "Lopez",
        "edad" => 27
    ],
    'persona_3' => [
        "nombre" => "Mario",
        "apellido" => "Castañeda",
        "edad" => 40
    ]
];

echo "<pre>";
print_r($matriz_4);
echo "</pre>";

// Recorrer una matriz
foreach ($matriz as $valor){
    echo $valor;
    echo "<br>";
}

foreach ($matriz_4 as $valor){
    foreach($valor as $key => $valor_2){
        echo "$key: $valor_2";
        echo "<br>";
    }
}