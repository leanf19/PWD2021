<?php
include_once "structure/Header.php";
include_once "../Controllers/vernumero.php";

$controller = new vernumero();
if ($_GET) {
    $respuesta = $controller->verificarNumero($_GET);
}

?>
<div class="container text-center p-3">
    <?php
    echo "<h3 class='h3'>{$respuesta}</h3>"
    ?>
    <button class="btn btn-primary bg-dark" onclick="window.history.back()" type="button">ATRÁS</button>
</div>
<?php
include_once "structure/Footer.php"; ?>
