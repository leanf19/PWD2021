<?php
include_once("structure/Header.php");
?>

    <div class="container px-5 my-5">
        <div class="text-center p-3">
            <h3>Alta persona</h3>
        </div>
        <form id="formPersona" name="formPersona" method="post" action="action/nuevaPersonaAction.php"
              onsubmit="return validarPersona();" novalidate>
            <div class="form-floating mb-3">
                <input class="form-control" id="dni" name="dni" type="text" placeholder="DNI" required>
                <label for="dni">DNI</label>
                <div class="invalid-feedback">Ingrese DNI sin puntos.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="apellido" name="apellido" type="text" placeholder="Apellido" required>
                <label for="apellido">Apellido</label>
                <div class="invalid-feedback">Ingrese un apellido válido.</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="nombre" name="nombre" type="text" placeholder="Nombre" required>
                <label for="nombre">Nombre</label>
                <div class="invalid-feedback">Ingrese un nombre válido</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="fechaDeNacimiento" name="fechaDeNacimiento" type="text"
                       placeholder="Fecha de nacimiento" required>
                <label for="fechaDeNacimiento">Fecha de nacimiento</label>
                <div class="invalid-feedback">Se requiere que ingrese una fecha de nacimiento válida</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="telefono" name="telefono" type="text" placeholder="Teléfono" required>
                <label for="telefono">Teléfono</label>
                <div class="invalid-feedback">Ingrese un teléfono válido</div>
            </div>
            <div class="form-floating mb-3">
                <input class="form-control" id="domicilio" name="domicilio" type="text" placeholder="Domicilio"
                       required>
                <label for="domicilio">Domicilio</label>
                <div class="invalid-feedback">Ingrese un domicilio válido</div>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary btn-lg" id="submitButton" type="submit">Enviar</button>
            </div>
        </form>
    </div>

    <script rel="script" src="js/validaciones.js"></script>

<?php
include_once("structure/Footer.php");
?>