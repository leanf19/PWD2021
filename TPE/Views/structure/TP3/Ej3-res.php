<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>TP3 - EJ3</title>
</head>
<body>
<?php
include_once "../Header.php";
include_once "../../../Controllers/verificaCinemaImagen.php";

$controller = new verificaCinemaImagen();
if (!empty($_POST))
    $resp = $controller->verificarDatos($_POST);
if (!empty($_FILES))
    $respImg = $controller->cargaImg($_FILES);


?>

<div class="container">
    <?php

    $etiquetaImg = "";
    if (isset($respImg)) {
        $etiquetaImg = "<div class='container col-2'><img src='../../files/img/{$respImg}'></div>";
    }
    echo "<div class='row p-5'>{$resp}{$etiquetaImg}
    </div>";

    ?>
</div>


<?php
include_once "../Footer.php";
?>
</body>
</html>


