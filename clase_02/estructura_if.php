<?php

// Estructura IF

// Operadores de comparación
/*
== Igual: Comparar el valor
=== Identico: Comparar el valor y el tipo de dato
!= <> Diferente
!== No identico
< Menor que
> Mayor que
<= Menor o igual que
>= Mayor o igual que 
*/

// Operadores lógicos
// && and AND Evalua que se cumplan las dos condiciones
// || or OR Evalua que se cumpla al menos una de las condiciones
// ! not NOT Niega una condición

$nombre = "Juan";
$edad = 15;
if (($edad >= 18) && ($nombre == "Juan")){ 
    echo "<h1>Es mayor de edad</h1>";
} else {
    echo "<h1>No es mayor de edad</h1>";
}

// Crear un programa que muestre si un numero e positivo, nevatigo o cero
$numero = 0;

if ($numero > 0){
    echo "<p>El numero es mayor a cero</p>";
} else if ($numero < 0){
    echo "<p>El numero es menor a cero</p>";
} else {
    echo "<p>El numero es cero</p>";
}

// Igual vs Identico
$num_1 = 5;
$num_2 = "5";

if ($num_1 === $num_2){
    echo "$num_1 y $num_2 son iguales";
} else {
    echo "$num_1 y $num_2 no son iguales";
}