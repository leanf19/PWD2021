<?php
include_once "../../config.php";
include_once "../../Controller/UsuarioController.php";
/**$sesion = new Session();
if (!$sesion->activa() and $sesion->getRol()->getIdRol() != 1) {
    header('Location: login.php');
    exit();
}*/
$datos = data_submitted();
var_dump($datos);

$objUser = new UsuarioController();
$usuario = array();
if(!empty($datos)){
    $usuario = $objUser->buscar($datos['idusuario']);
    $objUser=$usuario[0];
}
$objUser->modificacion($datos);

include_once "../structure/Header.php";


?>
<?php
include_once "../structure/Footer.php";
?>