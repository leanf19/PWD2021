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
    <form id="formulario1" name="formulario1" method="get" action="../../../Controllers/vernumero.php">
        <div class="form-group">
            <label>Ingrese un número:</label>
            <input id="numero" name="numero" type="number">
            <button class="btn btn-primary bg-dark" type="submit" value="ENVIAR">ENVIAR</button>
        </div>
    </form>
</div>

<?php
include_once "../Footer.php";
?>
</body>
</html>


