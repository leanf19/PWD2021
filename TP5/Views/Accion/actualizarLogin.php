<?php
include_once "../../config.php";
include_once "../../Controller/UsuarioController.php";

$sesion = new Session();
if (!$sesion->activa()) {
    header('Location: login.php');
    exit();
} else if ($sesion->getRol()->getIdRol() != 1) {
    header('Location: errorAcceso.php');
}

$datos = data_submitted();
$datos['usdeshabilitado'] = null;

$controller = new UsuarioController();
$usuario = array();
if(!empty($datos)){
//    $usuario = $controller->buscar($datos['idusuario']);
//   $objUser = null;
//    $objUser=$usuario[0];
    $controller->modificacion($datos);
}


include_once "../structure/Header.php";


?>
<?php
include_once "../structure/Footer.php";
?>