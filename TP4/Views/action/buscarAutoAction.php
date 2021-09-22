<?php
include_once("../structure/Header.php");
include_once("../../Controllers/ControllerAuto.php");

$controller = new ControllerAuto();
$response = array();
if (!empty($_POST)) {
    $response = $controller->buscarAuto($_POST);
}

?>

<div class="container text-center p-5 mt-5">
    <?php
    if (!empty($response)) {
        echo "<table class='table'>
        <thead class='table-dark'>
        <tr>";
        foreach ($response as $key => $value) {
            echo "<th scope='col'>{$key}</th>";
        }
        echo "</tr>
        </thead>
        <tbody>";
        foreach ($response as $field) {
            echo "<td>{$field}</td>";
        }
        echo "</tbody></table>";
    } else {
        echo "<div class='alert alert-info' role='alert'>¡No hay autos registrados con esa patente!</div>";
    }
    ?>


</div>

<?php
include_once("../structure/Footer.php");
?>


