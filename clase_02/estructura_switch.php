<?php

// Estructura de control: Switch

$dia = "Jueves";

switch ($dia){
    case "Lunes":
        echo "<h1>Hoy es Lunes</h1>";
        echo "<p>Bienvenido<p>";
        break;
    case "Martes":
        echo "<h1>Hoy es Martes</h1>";
        break;
    case "Miercoles":
        echo "<h1>Hoy es Miércoles</h1>";
        break;
    default:
        echo "<h1 style='color:red;'>No es un día de la semana</h1>";
        break;
}

// Tarea
/*
Crear un program que imprima el nombre del mes dependiendo del numero, utilizando la estructura switch
1 - Enero
2 - Febrero
3 - Marzo
...
*/