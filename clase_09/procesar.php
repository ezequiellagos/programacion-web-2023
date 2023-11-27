<?php

require_once("conexion.php");

/*
$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$edad = $_POST["edad"];
$archivo = $_FILES["archivo"];
*/

function subir_archivo($archivo){
    $archivo_nombre = $archivo["name"];
    $directorio = "img/";
    $archivo_destino = $directorio . basename($archivo_nombre);

    if (move_uploaded_file($archivo["tmp_name"], $archivo_destino)){
        //echo "El archivo $archivo_nombre ha sido subido correctamente";
        return $archivo_destino;
    }else{
        //echo "Ocurrió un error al subir el archivo";
        return "";
    }

}

function crear_alumno($conexion, $nombre, $apellido, $edad, $nombre_archivo){
    $sql = "INSERT INTO alumnos (nombre, apellido, edad, archivo) VALUES ('$nombre', '$apellido', $edad, '$nombre_archivo')";

    // Ejecutar la consulta
    $resultado = mysqli_query($conexion, $sql);
    if ($resultado){
        //echo "Se inserto correctamente el alumno. <br>";
        return True;
    }else{
        //echo "Error al insertar dato. <br>";
        //echo "La consulta: $sql - Fallo: " . mysqli_error($conexion);
        return FALSE;
    }
}


$nombre_archivo = subir_archivo($_FILES["archivo"]);
if ($nombre_archivo){
    $resultado_agregar_alumno = crear_alumno($conexion, $_POST["nombre"], $_POST["apellido"], $_POST["edad"], $nombre_archivo);
    if ($resultado_agregar_alumno) {
        echo "Se añadió alumno correctamente <br>";
    }else{
        echo "Error al añadir alumno <br>";
    }
}else{
    echo "Falló al mover el archivo <br>";
}
