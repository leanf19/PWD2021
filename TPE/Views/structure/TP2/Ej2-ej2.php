<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>TPE</title>
</head>
<body>
<?php
include_once "../Header.php";
?>

<div class="container text-center p-4">
    <form id="formulario2" name="formulario2" method="get" action="../TP1/Ej2-res.php">
        <div class="form-group p-2">
            <label>Ingrese las horas de cursada de PWD:</label>
            <input id="lunes" name="lunes" type="number" placeholder="lunes">
            <input id="martes" name="martes" type="number" placeholder="martes">
            <input id="miercoles" name="miercoles" type="number" placeholder="miercoles">
            <input id="jueves" name="jueves" type="number" placeholder="jueves">
            <input id="viernes" name="viernes" type="number" placeholder="viernes">
        </div>
        <button class="btn btn-primary bg-dark" type="submit" value="ENVIAR">ENVIAR</button>
    </form>
</div>
<script src="../../js/validacionFormEj3.js" type="application/javascript"></script>
<?php
include_once "../Footer.php";
?>
</body>
</html>
