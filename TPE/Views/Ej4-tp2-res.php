<?php
include_once "structure/Header.php";
include_once "../Controllers/verificaCinema.php";

$controller = new verificaCinema();
if (!empty($_POST))
    $resp = $controller->verificarDatos($_POST);
?>

<div class="container">
    <?php
    echo "<div class='p-2'>{$resp}</div>";
    ?>
    <button class="btn btn-primary bg-dark" type="button" onclick="window.history.back()">ATRÁS</button>
</div>


<?php
include_once "structure/Footer.php"; ?>


