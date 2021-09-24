<?php
include_once("../structure/Header.php");
include_once("../../Controllers/ControllerAuto.php");
include_once("../../Controllers/ControllerPersona.php");


$controllerAuto = new ControllerAuto();
$controllerPersona = new ControllerPersona();
$response = false;
$exito = false;
if (!empty($_POST)) {
    if (!($existe = ControllerPersona::existePersona($_POST)))
        $exito = $controllerPersona->insertarPersona($_POST);

    if ($existe || $exito)
        $response = $controllerAuto->insertarAuto($_POST);
}

?>

<div class="container text-center p-5 mt-5">
    <?php
    if ($response) {
        echo "<div class='alert alert-success' role='alert'>¡Alta existosa!</div>";
    } else {
        echo "<div class='alert alert-warning' role='alert'>No se ha podido dar de alta al auto indicado.</div>";
    }
    ?>
</div>

<?php
include_once("../structure/Footer.php");
?>


