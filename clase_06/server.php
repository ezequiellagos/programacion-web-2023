<?php

/*
$_SERVER

Es una varriable superglobal que contiene información sobre encabezados, rutas, ip, y ubicaciones de script

Se utilizan principalmente para recopilar datos del entorno del servidor
*/

echo $_SERVER['SERVER_NAME'];
echo "<br>";

echo $_SERVER['PHP_SELF'];
echo "<br>";

echo $_SERVER['SERVER_SOFTWARE'];
echo "<br>";

echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";

echo $_SERVER['REMOTE_ADDR'];
echo "<br>";

echo $_SERVER['SERVER_PORT'];
echo "<br>";

echo "<pre>";
print_r($_SERVER);
echo "</pre>";