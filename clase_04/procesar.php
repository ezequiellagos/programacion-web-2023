<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fruta = $_POST["fruta"];
    echo "La fruta seleccionada es $fruta";
}