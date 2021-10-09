<?php
include_once "../../config.php";
$sesion = new Session();

if (!$sesion->activa()) {
    header('Location: ../index/login.php');
}

if ($sesion->cerrar()) {
    include_once "../structure/Header.php";
    echo '<div class="container mt-5">';
    echo '<div class="alert alert-info"><h2>Usted ha cerrado sesión</h2></div>';
    echo '<a href="../index/login.php" class="btn btn-primary">Log In</a>';
    echo '</div>';
}
include_once "../structure/Footer.php";

?>