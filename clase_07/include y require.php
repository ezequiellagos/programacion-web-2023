<?php

// Include y require. Nos van a permitir incrustar un archivo dentro de otro

// include: si el archivo no existe el script sigue funcionando
//include "proceso.php";
include "proceso0.php";
//echo "despues del include";

// require: si el archivo no existe, el script se detiene
//require "proceso.php";
//require "proceso.php";
//echo "despues del require";

// include_once: si el archivo ya fue incluido, no lo vuelve a incluir
include_once "proceso.php";

// require_once: si el archivo ya fue incluido, no lo vuelve a incluir
require_once "proceso.php";

$resultado = suma(15, 5);
echo $resultado;