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

<div class="container text-center p-3">
    <div class="row pb-2">
        <h3 class="h3">Ejercicio 3</h3>
    </div>
    <div class="row d-flex align-content-end flex-wrap">
        <form id="formulario3" name="formulario3" method="post" action="../TP1/Ej3-res.php">
            <div class="form-group p-2">
                <label>Nombre</label>
                <input name="nombre" id="nombre">
            </div>
            <div class="form-group p-2">
                <label>Apellido</label>
                <input name="apellido" id="apellido">
            </div>
            <div class="form-group p-2">
                <label>Edad</label>
                <input name="edad" id="edad" type="number">
            </div>
            <div class="form-group p-2">
                <label>Direccion</label>
                <input name="direccion" id="direccion"> <br>
            </div>
            <button class="btn btn-primary bg-dark" type="submit">Enviar</button>
        </form>
    </div>
</div>
<script src="../../js/validacionFormEj3.js" type="application/javascript"></script>
<?php
include_once "../Footer.php";
?>
</body>
</html>