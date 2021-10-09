<?php
include_once "../../config.php";
$sesion = new Session();
if (!$sesion->activa()) {
    header('Location: login.php');
    exit();
}
include_once "../structure/Header.php";
?>
    <div class="container p-5">
        <div class="alert alert-success" role="alert">
            Bienvenido <?php
            echo $sesion->getUsuario()->getUsNombre();
            ?>! Te has loggeado correctamente.
        </div>
        <form action="../Accion/cerrarSesion.php">
            <input type="submit" class="btn btn-primary" value="Cerrar sesión">
        </form>
    </div>

<?php
include_once "../structure/Footer.php";
?>