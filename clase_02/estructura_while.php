<?php

// Estructura de control: While

$numero = 7;
$numero++; // 8 -> $numero = numero + 1;
$numero--; //6 -> $numero = numero - 1;
echo $numero;

$numero = 1;
while ($numero <= 10){
    echo "<p> $numero con comillas </p>";
    $numero++;
}

// Ejercicio
// Crear un programa que imprima numeros del 1 al 15 en una lista

$num = 1;
echo "<ul>";
while ($num <= 15){
    echo "<li> $num </li>";
    $num = $num + 1;
}
echo "</ul>";

// Do-While
$num_2 = 1;
do {
    echo "<p> $num_2 </p>";
    $num_2++;
} while ($num_2 <= 5);