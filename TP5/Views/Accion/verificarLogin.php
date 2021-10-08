<?php
include_once "../../config.php";
$datos = data_submitted();

$sesion = new Session();
$sesion->iniciar($datos['usnombre'], $datos['uspass']);

if ($sesion->validar()) {
    header('location:../paginaSegura.php');
} else {
    header('location:../login.php');
}
exit();
?>