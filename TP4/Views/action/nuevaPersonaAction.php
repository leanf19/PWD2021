<?php
include_once("../structure/Header.php");
include_once("../../Controllers/ControllerPersona.php");

$controller = new ControllerPersona();
$response = false;

$datos = data_submitted();
if (!empty($datos)) {
    $response = $controller->insertarPersona($datos);
}

?>

<div class="container text-center p-5 mt-5">
    <?php
    if ($response) {
        echo "<div class='alert alert-success' role='alert'>¡Alta existosa!</div>";
    } else {
        echo "<div class='alert alert-warning' role='alert'>No se ha podido dar de alta a la persona indicada.</div>";
    }
    ?>
</div>

<?php
include_once("../structure/Footer.php");
?>


