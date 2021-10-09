<?php
include_once "../../config.php";
$sesion = new Session();
if (!$sesion->activa()) {
    header('Location: login.php');
}
include_once "../structure/Header.php";
?>

<div class="container text-center mt-5">
    <div class="alert alert-danger"><h1>ACCESO DENEGADO</h1></div>
    <form action="../index/paginaSeguro.php">
        <input type="submit" class="btn btn-primary" value="Volver">
    </form>
</div>