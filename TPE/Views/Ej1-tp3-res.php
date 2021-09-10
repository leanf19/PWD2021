<?php
include_once "structure/Header.php";
include_once "../Controllers/cargaArchivoEj1.php";

$controller = new cargaArchivoEj1();
if ($_FILES)
    $resp = $controller->cargaArchivo($_FILES);
?>

<div class="container text-center p-5">
    <?php
    echo "<h2 class='h2'>{$resp}</h2>";
    ?>
</div>


<?php
include_once "structure/Footer.php"; ?>

