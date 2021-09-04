<?php
if ($_POST) {
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $edad = $_POST['edad'];
    $direccion = $_POST['direccion'];

    echo "<h2 class='h2'> Hola, yo soy {$nombre} {$apellido} tengo {$edad} y vivo en {$direccion} </h2>";
}
?>