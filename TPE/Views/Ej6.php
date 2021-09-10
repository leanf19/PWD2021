<?php
include_once "structure/Header.php"; ?>
    <div class="container align-content-center p-3">
        <div class="row pb-2">
            <h3 class="h3">Ejercicio 6</h3>
        </div>
        <div class="row d-flex align-content-end flex-wrap">
            <form id="formulario5" name="formulario5" method="get" action="Ej6-res.php">
                <div class="form-group p-2">
                    <label for="nombre">Nombre</label>
                    <input class="form-control-sm" name="nombre" id="nombre" required>
                </div>
                <div class="form-group p-2">
                    <label for="apellido">Apellido</label>
                    <input class="form-control-sm" name="apellido" id="apellido" required>
                </div>
                <div class="form-group p-2">
                    <label for="edad">Edad</label>
                    <input class="form-control-sm" name="edad" id="edad" type="number" required>
                </div>
                <div class="form-group p-2">
                    <label for="sexo">Sexo</label>
                    <select class="form-control-sm form-select-sm" id="sexo" name="sexo" required>
                        <option value="f">Femenino</option>
                        <option value="m">Masculino</option>
                        <option value="x">Binario</option>
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
                    <input class="form-control-sm" name="direccion" id="direccion" required>
                </div>
                <div>
                    <label for="deportes">Seleccionar deporte/s que realiza</label>
                    <div id="deportes">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="futbol" name="deporte[]" value="futbol">
                            <label class="form-check-label" for="futbol">Futbol</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="basquet" name="deporte[]"
                                   value="basquet">
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
include_once "structure/Footer.php"; ?>