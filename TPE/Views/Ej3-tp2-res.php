<?php
include_once "structure/Header.php";
include_once "../Controllers/verificaPass.php";

$controller = new verificaPass();
if ($_POST)
    $resp = $controller->validarLogin($_POST);
?>

<div class="container text-center p-5">
    <?php
    echo $resp;
    ?>
    <button class="btn btn-primary bg-dark" type="button" onclick="window.history.back()">ATRÁS</button>
</div>


<?php
include_once "structure/Footer.php"; ?>


