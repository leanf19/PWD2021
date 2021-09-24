<?php
include_once("structure/Header.php");
include_once "../Controllers/ControllerAuto.php";
include_once "../Controllers/ControllerPersona.php";


$objPers = new ControllerPersona();
$objAuto = new ControllerAuto();
$datos = data_submitted();
if (isset($datos['NroDni'])) {
    $info_a = $objAuto->buscarAuto($datos);
    $data = $objPers->buscarPersona($datos);
}
?>

    <div class="container text-center p-5 mt-5">
        
        <?php
            print_r($data);
            print_r($info_a);
            
        ?>
        <button class="btn btn-primary bg-dark" type="button" onclick="window.history.back()">ATRÁS</button>
    </div>
    

<?php
include_once("structure/Footer.php");
?>