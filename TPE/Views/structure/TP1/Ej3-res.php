<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>TPE - Resultado Ej3</title>
</head>
<body>
<?php
include_once "../Header.php";
include_once "../../../Controllers/ej3Controller.php";

$controller = new ej3Controller();
if ($_POST) {
    $respuesta = $controller->verificador($_POST);
}

?>
<div class="container text-center p-3">
    <?php
    echo "<h3 class='h3'>{$respuesta}</h3>"
    ?>
    <button class="btn btn-primary bg-dark" type="button"><a href="Ej3.php">ATRÁS</a></button>
</div>
<?php
include_once "../Footer.php";
?>
</body>
</html>