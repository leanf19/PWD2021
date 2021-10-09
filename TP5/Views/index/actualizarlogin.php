<?php
include_once "../../config.php";
include_once "../../Controller/UsuarioController.php";
$sesion = new Session();
if (!$sesion->activa() and $sesion->getRol()->getIdRol() != 1) {
    header('Location: login.php');
    exit();
}
$datos = data_submitted();
var_dump($datos);
include_once "../structure/Header.php";


?>


<div class="container px-5 my-5">
        <div class="text-center p-3">
            <h3>Modificar Usuario</h3>
        </div>
        <form id="formUser" name="formUser" method="post" action="../Accion/actualizarLogin.php"
              onsubmit="return validarCambio();" novalidate>
              <div class="form-floating mb-3">
                <input class="form-control"  hidden id="idusuario" name="idusuario" type="text" value="<?php echo $datos['idusuario'];?>" >
            </div>
              
            <div class="form-floating mb-3">
                <input class="form-control" id="usnombre" name="usnombre" type="text" placeholder="Username" required>
                <label for="usnombre">Username</label>
                <div class="invalid-feedback">Ingrese un username correcto.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="uspass" name="uspass" type="text" placeholder="password" required>
                <label for="uspass">Password</label>
                <div class="invalid-feedback">Ingrese una password válida.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="usmail" name="usmail" type="text" placeholder="email" required>
                <label for="usmail">Email</label>
                <div class="invalid-feedback">Ingrese un email válida.</div>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Cambiar</button>
            </div>
        </form>
    </div>

<script rel="script" src="js/validaciones.js"></script>


<?php
include_once "../structure/Footer.php";
?>