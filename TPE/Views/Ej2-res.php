<?php
include_once "structure/Header.php";
include_once "../Controllers/calcularHorasEj2.php";

$controller = new calcularHorasEj2();
if ($_GET) {
    $respuesta = $controller->calcularHoras($_GET);
}

?>
    <div class="container text-center p-3">
        <?php
        echo "<h3 class='h3'>{$respuesta}</h3>"
        ?>
        <button class="btn btn-primary bg-dark" type="button" onclick="window.history.back();">ATRÁS</button>
    </div>
<?php
include_once "structure/Footer.php"; ?>