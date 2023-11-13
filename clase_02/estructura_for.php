<?php

// Estructura de control: For

for($numero = 1; $numero <= 10; $numero++){
    echo "<h3>El numero es: $numero</h3>";
}

// Ejercicio
// Cree un programa que imprima los numeros del 1 al 15 en una lista ordenada

echo "<ol>";
for($i = 15; $i > 0; $i--){
    echo "<li>Elemento $i</li>";
}
echo "</ol>";

// Tarea: Escribir una tabla de multiplicar del 1 al 10 en formato tabla