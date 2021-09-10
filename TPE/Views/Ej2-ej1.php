<?php
include_once "structure/Header.php"; ?>

    <div class="container text-center p-4">
        <form class="needs-validation" id="formulario1" name="formulario1" method="get" action="Ej1-res.php"
              onsubmit="return validarForm();"
              novalidate>
            <div class="form-group p-2">
                <label>Ingrese un número:</label>
                <input id="numero" name="numero" type="number" class="form-control col-2" required>
                <div class="invalid-feedback">Ingrese un numero</div>
            </div>
            <button class="btn btn-primary bg-dark" type="submit" value="ENVIAR">ENVIAR</button>
        </form>
    </div>
    <script src="js/validacionFormEj1Tp1.js" type="application/javascript"></script>
<?php
include_once "structure/Footer.php"; ?>