<?php
include_once "../../config.php";
$sesion = new Session();
if (!$sesion->activa()) {
    header('Location: login.php');
    exit();
}
$datos = data_submitted();
if (!empty($datos)) {
    $controller = new UsuarioController();
    $user = $controller->buscar($datos);

    if (!is_null($user)) {
        $user->modificar();
        echo '<div class="container mt-5">';
        echo '<div class="alert alert-info"><h2>Usuario {$user}</h2></div>';
        echo '<a href="../index/login.php" class="btn btn-primary">Log In</a>';
        echo '</div>';
    } else {
        echo '<div></div>';
    }
}
include_once "../structure/Header.php";
?>