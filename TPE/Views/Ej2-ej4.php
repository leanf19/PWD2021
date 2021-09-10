<?php
include_once "structure/Header.php"; ?>
<div class="container text-center p-3">
    <div class="row pb-2">
        <h3 class="h3">Ejercicio 4</h3>
    </div>
    <div class="row d-flex align-content-end flex-wrap">
        <form id="formulario4" name="formulario4" method="get" action="Ej4-res.php" onsubmit="return validacion();"
              novalidate>
            <div class="form-group p-2">
                <label for="nombre">Nombre</label>
                <input class="form-control" name="nombre" id="nombre" required>
                <div class="invalid-feedback">Ingrese un nombre</div>
            </div>
            <div class="form-group p-2">
                <label for="apellido">Apellido</label>
                <input class="form-control" name="apellido" id="apellido" required>
                <div class="invalid-feedback">Ingrese un apellido</div>
            </div>
            <div class="form-group p-2">
                <label for="edad">Edad</label>
                <input class="form-control" name="edad" id="edad" type="number" required>
                <div class="invalid-feedback">Ingrese una edad válida</div>
            </div>
            <div class="form-group p-2">
                <label for="direccion">Direccion</label>
                <input class="form-control" name="direccion" id="direccion" required>
                <div class="invalid-feedback">Ingrese una direccion</div>
            </div>
            <button class="btn btn-primary bg-dark" type="submit">Enviar</button>
        </form>
    </div>
</div>
<script src="js/validacionFormTP2Ej3.js" type="application/javascript"></script>
<?php
include_once "structure/Footer.php"; ?>
