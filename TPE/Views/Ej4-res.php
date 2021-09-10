<?php
include_once "structure/Header.php";
include_once "../Controllers/ej4Controller.php";

$controller = new ej4Controller();
if ($_GET) {
    $respuesta = $controller->verificarEdad($_GET);
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
