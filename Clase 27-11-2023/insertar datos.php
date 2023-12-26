<?php

// Insertar datos en la base de datos

// Datos de Conexion a la base de datos
$servername = "localhost";
$dbname = "myDB";
$dbuser = "root";
$dbpass = "";

// Crear conexion de manera procedural
$conn = mysqli_connect($servername, $dbuser, $dbpass, $dbname);

// Chequear conexion
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Insertar datos en la tabla
$sql = "INSERT INTO alumnos (nombre, apellido, email) VALUES ('Juan', 'Perez', 'email@mail.com')";

// Ejecutar consulta
if (mysqli_query($conn, $sql)) {
  echo "Datos insertados correctamente";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Cerrar conexion
mysqli_close($conn);

// Seleccionar datos de la tabla
$sql = "SELECT id, nombre, apellido FROM alumnos";

// Ejecutar consulta
$result = mysqli_query($conn, $sql);

// Chequear si hay resultados
if (mysqli_num_rows($result) > 0) {
  // Mostrar datos de cada fila
  while($row = mysqli_fetch_assoc($result)) {
    echo "id: " . $row["id"]. " - Nombre: " . $row["nombre"]. " " . $row["apellido"]. "<br>";
  }
} else {
  echo "0 results";
}

// Cerrar conexion
mysqli_close($conn);
