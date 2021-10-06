<?php
include_once("../structure/Header.php");
include_once "../../Controllers/ControllerPersona.php";

$datos = data_submitted();
$objPers = new ControllerPersona();
$resp = $objPers->modificarPersona($datos);
?>

    <div class="container text-center p-5 mt-5">
        <?php
        if ($resp) {
            echo "<div class='alert alert-success p-3' role='alert'>
            <h4 class='alert-heading'>Datos actualizados correctamente!</h4></div>";
        } else {
            echo "<div class='alert alert-warning p-3' role='alert'>
            <h4 class='alert-heading'>No se registro cambios!</h4></div>";
        }
        ?>

    </div>

<?php
include_once("../structure/Footer.php");
?>
