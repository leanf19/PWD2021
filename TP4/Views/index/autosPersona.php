<?php
include_once("../structure/Header.php");
include_once "../Controllers/ControllerAuto.php";
include_once "../Controllers/ControllerPersona.php";


$objPers = new ControllerPersona();
$objAuto = new ControllerAuto();
$datos = data_submitted();
if (isset($datos['dni'])) {
    $info_a = $objAuto->buscarAuto($datos);
    $data = $objPers->buscarPersona($datos);
}
?>

    <div class="container text-center p-5 mt-5">

        <?php
        if (!empty($info_a)) {
            echo "<table class='table'>
        <thead class='table-dark'>
        <tr>
        <th scope='col'>Patente</th>
        <th scope='col'>Modelo</th>
        <th scope='col'>Marca</th>
        <th scope='col'>Dueño</th>
        </tr>
        
        </thead>
        <tbody>";
            foreach ($info_a as $field) {
                echo "<tr>";
                echo "<th scope='row'>{$field['patente']}</th>";
                echo "<td>{$field['modelo']}</td>";
                echo "<td>{$field['marca']}</td>";
                echo "<td>{$field['duenio']}</td>";
                echo "</tr>";
            }
            echo "</tbody></table>";
        } else {
            echo "<div class='alert alert-info' role='alert'>¡No hay autos registrados!</div>";
        }
        ?>
        <button class="btn btn-primary bg-dark" type="button" onclick="window.history.back()">ATRÁS</button>
    </div>


<?php
include_once("../structure/Footer.php");
?>
