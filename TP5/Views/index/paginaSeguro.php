<?php
include_once "../../config.php";
$sesion = new Session();
$sesion->activa();
include_once "../structure/Header.php";
//TODO finish login
?>
    <div class="container p-5">
        <div class="alert alert-success" role="alert">
            Bienvenido <?php
            $sesion->getUsuario();
            ?>! Te has loggeado correctamente.
        </div>
    </div>

<?php
include_once "../structure/Footer.php";
?>