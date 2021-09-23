<?php
include_once("structure/Header.php");
?>

    <div class="container px-5 my-5">
        <div class="text-center p-3">
            <h3>Cambio de dueño</h3>
        </div>
        <form id="formPersona" name="formPersona" method="post" action="action/cambioDuenioAction.php"
              onsubmit="return validarCambio();" novalidate>
            <div class="form-floating mb-3">
                <input class="form-control" id="dni" name="dni" type="text" placeholder="DNI" required>
                <label for="dni">DNI</label>
                <div class="invalid-feedback">Ingrese DNI sin puntos.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="patente" name="patente" type="text" placeholder="Patente" required>
                <label for="patente">Patente</label>
                <div class="invalid-feedback">Ingrese una patente válida.</div>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Cambiar</button>
            </div>
        </form>
    </div>

    <script rel="script" src="js/validaciones.js"></script>

<?php
include_once("structure/Footer.php");
?>