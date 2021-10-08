<?php
include_once "../../config.php";
include_once "../../Controller/Session.php";
$datos = data_submitted();

$sesion = new Session();
$sesion->iniciar($datos['usnombre'], $datos['uspass']);

if ($sesion->validar()) {
    header('location:../index/paginaSeguro.php');
} else {
    header('location:../index/login.php');
}
exit();
?>