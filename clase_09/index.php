
<?php

require_once "conexion.php";

$sql = "SELECT * FROM alumnos;";

// Ejecutar la consulta
$resultado = mysqli_query($conexion, $sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</head>
<body>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="procesar.php" method="POST" enctype="multipart/form-data">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" name="nombre" id="nombre" class="form-control">

                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" name="apellido" id="apellido" class="form-control">

                    <label for="edad" class="form-label">Edad</label>
                    <input type="number" name="edad" id="edad" class="form-control">

                    <label for="archivo" class="form-label">Archivo</label>
                    <input type="file" name="archivo" id="archivo" class="form-control">

                    <input type="submit" value="Enviar" class="btn btn-primary mt-2">
                </form>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <table class="table table-striped">
                    <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Edad</th>
                        <th>Archivo</th>
                    </tr>
                    <?php
                    if (mysqli_num_rows($resultado) > 0) {
                        // Mostrar los datos de cada fila
                        while($row = mysqli_fetch_assoc($resultado)){
                            
                            echo "
                            <tr>
                                <td>" . $row['id'] . "</td>
                                <td>" . $row['nombre'] . "</td>
                                <td>" . $row['apellido'] . "</td>
                                <td>" . $row['edad'] . "</td>
                                <td><img src='" . $row['archivo'] . "' class='img-fluid'></td>
                            </tr>
                            ";
                        
                        }
                    }else { 
                        echo "
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>                        
                            </tr>
                            ";
                    }
                    ?>
                    
                </table>
            </div>
        </div>

    </div>

    
    
</body>
</html>