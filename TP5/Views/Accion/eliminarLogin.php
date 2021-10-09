<?php
include_once "../../config.php";
$sesion = new Session();
if (!$sesion->activa()) {
    header('Location: login.php');
    exit();
}
include_once "../structure/Header.php";
$datos = data_submitted();

$controller = new UsuarioController();
$exito = false;
if (!empty($datos)) {

    $busqueda = $controller->buscar($datos);
    if (!empty($busqueda)) {
        $user = $busqueda[0];
        if ($user->getIdUsuario() != $sesion->getUsuario()->getIdUsuario()) {
            $datos['usnombre'] = $user->getUsNombre();
            $datos['uspass'] = $user->getUsPass();
            $datos['usmail'] = $user->getUsMail();
            $datos['usdeshabilitado'] = date('Y-m-d H:i:s');
            $exito = $controller->modificacion($datos);
        }
    }
}
echo '<div class="container mt-5">';
if ($exito) {
    echo '<div class="alert alert-info"><h2>El usuario ha sido deshabilitado con éxito</h2></div>';
    echo '<a href="../index/listaUsuarios.php" class="btn btn-primary">Volver</a>';
} else {
    echo '<div class="alert alert-danger" role="alert">HA OCURRIDO UN ERROR. EL USUARIO NO HA SIDO DESHABILITADO</div>';
}
echo '</div>';
include_once '../structure/Footer.php';
?>