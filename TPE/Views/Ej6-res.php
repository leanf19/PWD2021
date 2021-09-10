<?php
include_once "structure/Header.php"; ?>
    <title>TPE - Resultado Ej6</title>
    </head>
    <body>
<?php
include_once "structure/Header.php";
include_once "../Controllers/ej6Controller.php";

$controller = new ej6Controller();
if ($_GET) {
    $respuesta = $controller->verificarDatos($_GET);
}

?>
    <div class="container text-center p-3">
        <?php
        echo $respuesta;
        ?>
        <button class="btn btn-primary bg-dark" type="button" onclick="window.history.back()">ATRÁS</button>
    </div>
<?php
include_once "structure/Footer.php"; ?>