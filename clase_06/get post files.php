<?php

// $_GET 
// http://google.cl/mi_script.php?nombre=valor&apellido=Perez&edad=14
echo "GET:";
echo "<pre>";
print_r($_GET);
echo "</pre>";

// $_POST

echo "POST:";
echo "<pre>";
print_r($_POST);
echo "</pre>";

// $_FILES
echo "FILES:";
echo "<pre>";
print_r($_FILES);
echo "</pre>";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        table, th, td {
            border:1px solid black;
        }
    </style>
</head>
<body>
    <h1>Formulario:</h1>
    <form action="#" method="post" enctype="multipart/form-data">
        <label for="nombre">Nombre Archivo:</label>
        <input type="text" name="nombre" id="nombre">

        <br>

        <label for="fecha">Fecha:</label>
        <input type="date" name="fecha" id="fecha">

        <br>

        <label for="archivo">Archivo</label>
        <input type="file" name="archivo" id="archivo">

        <br>

        <input type="submit" value="Enviar">
    </form>

    <table>
        <?php
        if ($_FILES) {
            foreach($_FILES['archivo'] AS $key => $value){ ?>

                <tr>
                    <td><?php echo $key ?></td>
                    <td><?php echo $value ?></td>
                </tr>

            <?php
            }        
        }
        ?>
    </table>

    <?php if($_FILES) : ?>
        <p>FILES existe</p>
    <?php endif; ?>
</body>
</html>