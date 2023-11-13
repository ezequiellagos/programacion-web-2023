<?php

echo "Hola Mundo!";

// Variables
$nombre = "Juan";
$apellido = "Perez";

echo "<br>";
echo $nombre;
echo $apellido;

// Concatenar
echo "<br/>";
echo "Hola " . $nombre . " " . $apellido;
echo "<br>";
echo "'Hola' $nombre $apellido <br> <h1>Hola</h1>";
echo "<br>";
echo '"Hola" $nombre $apellido';

// Constantes
define('PI', 3.14);
echo "<br>";
echo PI;

?>