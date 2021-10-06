<?php
include_once("../structure/Header.php");
include_once("../Controllers/ControllerAuto.php");

$listadoAutos = ControllerAuto::ListarAutos();


?>

    <div class="container text-center p-5 mt-5">
        <?php
        if (!empty($listadoAutos)) {
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
            foreach ($listadoAutos as $field) {
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


    </div>

<?php
include_once("../structure/Footer.php");
?>
