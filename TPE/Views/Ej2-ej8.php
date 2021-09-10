<?php
include_once "structure/Header.php"; ?>
    <div class="container align-content-center p-3">
        <div class="row pb-2">
            <h2 class="h3">Ejercicio 8</h2>

            <h4 class="h3">Calcule su tarifa</h4>
        </div>
        <div class="row d-flex align-content-end flex-wrap">
            <form id="formulario5" name="formulario5" method="get" action="Ej8-res.php" onsubmit="return validar();"
                  novalidate>
                <div class="form-group p-2">
                    <label for="edad">Edad</label>
                    <input class="form-control" name="edad" id="edad" type="number" required>
                </div>
                <div>
                    <label for="estudiosRadio">Estudiante</label>
                    <div id="estudiosRadio">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="esEstudiante" id="estudiante"
                                   value="Si">
                            <label class="form-check-label" for="estudiante">Si</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="esEstudiante" id="noEstudiante"
                                   value="No" checked>
                            <label class="form-check-label" for="noEstudiante">No</label>
                        </div>
                    </div>
                </div>

                <button class="btn btn-primary bg-dark" type="submit">Enviar</button>
                <button class="btn btn-primary bg-dark" type="reset" onclick="reset();">Borrar</button>
            </form>
        </div>
    </div>
    <script src="js/validacionFormTP2Ej8.js" type="application/javascript"></script>
<?php
include_once "structure/Footer.php"; ?>