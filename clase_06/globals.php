<?php

/*
Globals - Variables en el scope global

$GLOBALS
Es una variables superglobal que contiene todas las variables globales del script.
*/

// Ejemplo
$x = 75;
$y = 25;

function suma(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
    //$z = $x + $y;
}

suma();
echo $z;

echo "<br>";

echo "<pre>";
print_r($GLOBALS);
echo "</pre>";