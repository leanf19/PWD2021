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
<div class="container align-content-center p-3">
    <div class="row pb-2">
        <h3 class="h3">Ejercicio 6</h3>
    </div>
    <div class="row d-flex align-content-end flex-wrap">
        <form id="formulario5" name="formulario5" method="get" action="Ej7-res.php">
            <div class="form-group p-2">
                <label for="A">A</label>
                <input class="form-control-sm" name="A" id="A" type="number">
            </div>
            <div class="form-group p-2">
                <label for="B">B</label>
                <input class="form-control-sm" name="B" id="B" type="number">
            </div>
            <div class="form-group p-2">
                <label for="Operacion">Operacion</label>
                <select class="form-control-sm form-select-sm" id="Operacion" name="Operacion">
                    <option value="">Elegir</option>
                    <option value="+">SUMA</option>
                    <option value="-">RESTA</option>
                    <option value="*">MULTIPLICACION</option>
                    <option value="/">DIVISION</option>
                </select>
            </div>
            <button class="btn btn-primary bg-dark" type="submit">Calcular</button>
        </form>
    </div>
</div>

<?php
include_once "../Footer.php";
?>
</body>
</html>