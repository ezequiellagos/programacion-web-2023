<?php

// Funciones
function saludar( $nombre ){
    echo "Hola $nombre";
}
saludar("Juan");

// Funciones con retorno
function sumar($a = 20, $b = 10){
    $resultado = $a + $b;
    return $resultado;
}

$resultado_suma = sumar(4, 10);
echo $resultado_suma;
echo "<br>";
echo sumar();