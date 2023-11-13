<?php

// Estructura de contrl: ForEach

/*
foreach ($array as $valor){
    //Codigo
}
 */

$colores = array("red", "green", "blue", "purple");

foreach ($colores as $color){
    echo "<p style='color: $color;'>$color</p>";
}

// Ejercicio
// Crear un aareglo de nombres de 5 elementos, reccorrer mediante foreach y saludar a cada persona.

$nombres = ["Juan", "Maria", "Pedro", "Alejandra", "Diego"];

foreach($nombres as $nombre){
    echo "<p>Hola <u><b> $nombre </b></u> </p>";
    echo "<hr>";
}