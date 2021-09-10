<?php
include_once "structure/Header.php";
include_once "../Controllers/ej5Controller.php";

$controller = new ej5Controller();
if ($_POST) {
    $respuesta = $controller->verificarDatos($_POST);
}

?>
<div class="container text-center p-3">
    <?php
    echo $respuesta;
    ?>
    <button class="btn btn-primary bg-dark" type="button" onclick="window.history.back()">ATRÁS</button>
</div>
<?php
include_once "structure/Footer.php"; ?>
