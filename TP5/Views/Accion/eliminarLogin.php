<?php
include_once "../../config.php";
$sesion = new Session();
include_once "../structure/Header.php";
if ($sesion->cerrar()) {

    echo '<div class="card text-center" style="margin-left: auto; margin-right: auto;">';
    echo '<div class="card-body">';
    echo '<h5 class="card-title text-black mb-5">Usted ha cerrado sesión</h5>';
    echo '<a href="../index/login.php" class="btn btn-primary">Log In</a>';
    echo '</div>';
    echo '</div>';

}
include_once "../structure/Footer.php";

?>