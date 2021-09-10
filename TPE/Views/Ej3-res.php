<?php
include_once "structure/Header.php";
include_once "../Controllers/ej3Controller.php";

$controller = new ej3Controller();
if ($_POST) {
    $respuesta = $controller->verificador($_POST);
}

?>
    <div class="container text-center p-3">
        <?php
        echo "<h3 class='h3'>{$respuesta}</h3>"
        ?>
        <button class="btn btn-primary bg-dark" type="button" onclick="window.history.back()">ATRÁS</button>
    </div>
<?php
include_once "structure/Footer.php"; ?>