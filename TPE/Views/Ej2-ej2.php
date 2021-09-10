<?php
include_once "structure/Header.php"; ?>

<div class="container text-center p-4">
    <form id="formulario2" name="formulario2" method="get" action="Ej2-res.php" onsubmit="return validar();" novalidate>
        <div class="form-group p-2">
            <label>Ingrese las horas de cursada de PWD:</label><br>
            <div class="form-group p-2">
                <input class="form-control" id="lunes" name="lunes" type="number" placeholder="lunes" required>
                <div class="invalid-feedback">Ingrese un numero valido</div>
            </div>
            <div class="form-group p-2">
                <input class="form-control" id="martes" name="martes" type="number" placeholder="martes" required>
                <div class="invalid-feedback">Ingrese un numero valido</div>
            </div>
            <div class="form-group p-2">
                <input class="form-control" id="miercoles" name="miercoles" type="number" placeholder="miercoles"
                       required>
                <div class="invalid-feedback">Ingrese un numero valido</div>
            </div>
            <div class="form-group p-2">
                <input class="form-control" id="jueves" name="jueves" type="number" placeholder="jueves" required>
                <div class="invalid-feedback">Ingrese un numero valido</div>
            </div>
            <div class="form-group p-2">
                <input class="form-control" id="viernes" name="viernes" type="number" placeholder="viernes" required>
                <div class="invalid-feedback">Ingrese un numero valido</div>
            </div>
        </div>
        <button class="btn btn-primary bg-dark" type="submit" value="ENVIAR">ENVIAR</button>
    </form>
</div>
<script src="js/validacionFormEj2.js"></script>
<?php
include_once "structure/Footer.php"; ?>
