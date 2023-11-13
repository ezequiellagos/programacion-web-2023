<?php


// Leer archivo
$mi_archivo = fopen("mi_archivo.txt", 'r') or die("Imposible abrir el archivo");

// Leer todo el archivo
//echo fread($mi_archivo, filesize("mi_archivo.txt"));

// Leer linea a linea
while( !feof($mi_archivo) ){
    echo fgets($mi_archivo) . "<br>";
}

// Cierra el archivo
fclose($mi_archivo);

// Escribir en archivo
$mi_archivo = fopen("mi_archivo.txt", 'w') or die("Imposible abrir el archivo");

fwrite($mi_archivo, "Probando texto \n");
fwrite($mi_archivo, "Probando texto \n");
fwrite($mi_archivo, "Probando texto \n");

fclose($mi_archivo);
