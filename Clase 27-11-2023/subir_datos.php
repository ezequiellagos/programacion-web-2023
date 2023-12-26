<?php

$foto = $_FILES['foto']['name'];

$directorio = "img/";
$archivo_destino = $directorio . basename($_FILES['foto']['name']);

// Subir archivo a la carpeta
if (move_uploaded_file($_FILES['foto']['tmp_name'], $archivo_destino)) {
    echo "El archivo " . basename($_FILES['foto']['name']) . " ha sido subido.";
} else {
    echo "Ha ocurrido un error al subir el archivo.";
}