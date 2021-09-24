<?php
include_once("../structure/Header.php");
include_once "../../Controllers/ControllerPersona.php";


$objPers = new ControllerPersona();
$datos = data_submitted();
$persona = array();
if (!empty($datos)) {
    $persona = $objPers->buscarPersona($datos);
    if (count($persona) == 1) {
        $objPer = $persona[0];

        $dni= $datos['NroDni'];
        $apellido = ucfirst($objPer->getApellido());
        $nombre =ucfirst( $objPer->getNombre()); 
        $fechaNac = $objPer->getFechaNac();
        $telefono = $objPer->getTelefono();
        $domicilio = $objPer->getDomicilio();
    } 
}
?>

<div class="container p-5 mt-5">
    <?php
    if (!empty($persona)) {
        echo "<div class='text-center'>
        <h4 class=''><i class=''></i> Datos Personales</h4>
    </div>
    <div>
    <form id='actualizar' name='actualizar' method='post' action='../actualizarDatosPersona.php'>
        <div class='row p-2'>
            <div class='form-group col-3'>
                <label for='NroDni'>DNI</label>
                <input id='NroDni' name='NroDni' value='{$dni}' type='text' class='form-control bg-light' readonly>
            </div>
        </div>
        <div class='row p-2'>
            <div class='form-group col-6'>
                <label for='apellido'>Apellido</label>
                <input id='apellido' name='apellido' value='{$apellido}' type='text' class='form-control' required>
                <div class='invalid-feedback'>Ingrese el apellido</div>
            </div>
            <div class='form-group col-6'>
                <label for='nombre'>Nombre</label>
                <input id='nombre' name='nombre' value='{$nombre}' type='text' class='form-control' required>
                <div class='invalid-feedback'>Ingrese el nombre</div>
            </div>
        </div>
        <div class='row p-2'>
            <div class='form-group col-6'>
                <label for='fechaNac'>Fecha de nacimiento</label>
                <input type='date' id='fechaNac' name='fechaNac' value='{$fechaNac}' type='text' class='form-control' required>
                <div class='invalid-feedback'>Ingrese la fecha de nacimiento</div>
            </div>
            <div class='form-group col-6'>
                <label for='telefono'>Telefono</label>
                <input id='telefono' name='telefono' value='{$telefono}' type='text' class='form-control' required>
                <div class='invalid-feedback'>Ingrese el telefono</div>
            </div>
        </div>
        <div class='row p-2'>
            <div class='form-group col-6'>
                <label for='domicilio'>Domicilio</label>
                <input id='domicilio' name='domicilio' value='{$domicilio}' type='text' class='form-control' required>
                <div class='invalid-feedback'>Ingrese el domicilio</div>
            </div>
        </div>
        <div class='row p-1 justify-content-end'>
            <div class='form-group col-2'>
                <button name='submit' type='submit' class='btn btn-primary'>Actualizar</button>
            </div>
            <button class='btn btn-primary bg-dark col-1' type='button' onclick='window.history.back()'>Volver</button>
        </div>
    </form>
    </div>";
    } else {
        echo "<div class='alert alert-info' role='alert'>¡No hay personas registrados con ese DNI!</div>";
    }
    ?>

    


    
</div>

    
<?php
include_once("../structure/Footer.php");
?>
