<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <title>TPE</title>
    <script src="../../js/validacionFormTP1E6.js" type="application/javascript"></script>
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
        <form id="formulario5" name="formulario5" method="get" action="Ej6-res.php" onsubmit="return validacion();">
            <div class="form-group p-2">
                <label for="nombre">Nombre</label>
                <input class="form-control-sm" name="nombre" id="nombre">
                <div class="invalid-feedback">Ingrese el nombre</div>
            </div>
            <div class="form-group p-2">
                <label for="apellido">Apellido</label>
                <input class="form-control-sm" name="apellido" id="apellido">
                <div class="invalid-feedback">Ingrese el apellido</div>
            </div>
            <div class="form-group p-2">
                <label for="edad">Edad</label>
                <input class="form-control-sm" name="edad" id="edad" type="number">
                <div class="invalid-feedback">Rango de edad invalido</div>
            </div>
            <div class="form-group p-2">
                <label for="sexo">Sexo</label>
                <select class="form-control-sm form-select-sm" id="sexo" name="sexo">
                    <option value="f">Femenino</option>
                    <option value="m">Masculino</option>
                    <option value="x">No binario</option>
                </select>
            </div>
            <div>
                <label for="estudiosRadio">Nivel de estudios alcanzado</label>
                <div id="estudiosRadio">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estudios" id="sinEstudios"
                               value="sinEstudios" checked>
                        <label class="form-check-label" for="sinEstudios">Sin estudios</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estudios" id="estudiosPrimarios"
                               value="estudiosPrimarios">
                        <label class="form-check-label" for="estudiosPrimarios">Primaria</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="estudios" id="estudiosSecundarios"
                               value="estudiosSecundarios">
                        <label class="form-check-label" for="estudiosSecundarios">Secundaria</label>
                    </div>
                </div>
            </div>
            <div class="form-group p-2">
                <label for="direccion">Direccion</label>
                <input class="form-control-sm" name="direccion" id="direccion">
                <div class="invalid-feedback">Ingrese una direccion</div>
            </div>
            <div>
                <label for="deportes">Seleccionar deporte/s que realiza</label>
                <div id="deportes">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="futbol" name="deporte[]" value="futbol">
                        <label class="form-check-label" for="futbol">Futbol</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="basquet" name="deporte[]" value="basquet">
                        <label class="form-check-label" for="basquet">Basquet</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="tenis" name="deporte[]" value="tenis">
                        <label class="form-check-label" for="tenis">Tenis</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="checkbox" id="voley" name="deporte[]" value="voley">
                        <label class="form-check-label" for="voley">Voley</label>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary bg-dark" type="submit">Enviar</button>
        </form>
    </div>
</div>

<?php
include_once "../Footer.php";
?>
</body>
</html>


