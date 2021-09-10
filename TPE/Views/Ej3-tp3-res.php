<?php
include_once "structure/Header.php";
include_once "../Controllers/verificaCinemaImagen.php";

$controller = new verificaCinemaImagen();
if (!empty($_POST))
    $resp = $controller->verificarDatos($_POST);
if (!empty($_FILES))
    $respImg = $controller->cargaImg($_FILES);


?>

<div class="container">
    <?php

    $etiquetaImg = "";
    if (!empty($respImg)) {
        $etiquetaImg = "<div class='float-end col-4'><img src='files/img/{$respImg}' width='100%'></div>";
    }
    echo "<div class='row p-5'>{$resp}{$etiquetaImg}</div></div>
    </div>";

    ?>
    <button class="btn btn-primary bg-dark col-12" type="button" onclick="window.history.back()">ATRÁS
    </button>

</div>


<?php
include_once "structure/Footer.php"; ?>


