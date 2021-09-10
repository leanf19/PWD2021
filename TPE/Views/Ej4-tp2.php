<?php
include_once "structure/Header.php"; ?>

<div class="container p-4">
    <form id="registro" name="registro" method="post" action="Ej4-tp2-res.php"
          onsubmit="return validacion();" novalidate>
        <div class="row p-2">
            <div class="form-group col-6">
                <label for="titulo">Titulo</label>
                <input id="titulo" name="titulo" placeholder="Titulo" type="text" class="form-control" required>
                <div class="invalid-feedback">Ingrese un nombre</div>
            </div>
            <div class="form-group col-6">
                <label for="actores">Actores</label>
                <input id="actores" name="actores" placeholder="Actores" type="text" class="form-control" required>
                <div class="invalid-feedback">Ingrese los actores</div>
            </div>
        </div>
        <div class="row p-2">
            <div class="form-group col-6">
                <label for="director">Director</label>
                <input id="director" name="director" placeholder="Director" type="text" class="form-control" required>
                <div class="invalid-feedback">Ingrese el director</div>
            </div>
            <div class="form-group col-6">
                <label for="guion">Guión</label>
                <input id="guion" name="guion" placeholder="Guión" type="text" class="form-control" required>
                <div class="invalid-feedback">Ingrese el guionista</div>
            </div>
        </div>
        <div class="row p-2">
            <div class="form-group col-6">
                <label for="produccion">Producción</label>
                <input id="produccion" name="produccion" placeholder="Producción" type="text" class="form-control"
                       required>
                <div class="invalid-feedback">Ingrese la productora</div>
            </div>
            <div class="form-grou col-6">
                <label for="anio">Año</label>
                <input id="anio" name="anio" placeholder="Año" type="text" maxlength="4" class="form-control"
                       required>
                <div class="invalid-feedback">Ingrese un año válido</div>
            </div>
        </div>
        <div class="row p-2">
            <div class="form-group col-6">
                <label for="nacionalidad">Nacionalidad</label>
                <input id="nacionalidad" name="nacionalidad" placeholder="Nacionalidad" type="text"
                       class="form-control" required>
                <div class="invalid-feedback">Ingrese un dato valido</div>
            </div>
            <div class="form-group col-6">
                <label for="genero">Genero</label>
                <select class="form-select" name="genero" id="genero" required>
                    <option value="" disabled selected hidden>Seleccionar...</option>
                    <option value="comedia">Comedia</option>
                    <option value="drama">Drama</option>
                    <option value="terror">Terror</option>
                    <option value="romantica">Romantica</option>
                    <option value="suspenso">Suspenso</option>
                    <option value="otro">Otro</option>
                </select>
                <div class="invalid-feedback">Seleccione un genero</div>
            </div>
        </div>
        <div class="row p-2">
            <div class="form-group col-4">
                <label for="duracion">Duración</label>
                <input id="duracion" name="duracion" placeholder="Duración" maxlength="3" type="text"
                       class="form-control" required>
                <div class="invalid-feedback">Ingrese una duración valida</div>
            </div>
            <div class="form-group col-8">
                <label>Restricciones de edad</label>
                <div class="form-control">
                    <div class="custom-control custom-radio form-check-inline">
                        <input name="edad" id="edad_0" type="radio" class="custom-control-input" value="atp" checked>
                        <label for="edad_0" class="custom-control-label">Todo Público</label>
                    </div>
                    <div class="custom-control custom-radio form-check-inline">
                        <input name="edad" id="edad_1" type="radio" class="custom-control-input" value="sieteAnios">
                        <label for="edad_1" class="custom-control-label">Mayores de 7 años</label>
                    </div>
                    <div class="custom-control custom-radio form-check-inline">
                        <input name="edad" id="edad_2" type="radio" class="custom-control-input" value="mayoresDeEdad">
                        <label for="edad_2" class="custom-control-label">Mayores de 18 años</label>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-group p-2">
            <label for="sinopsis">Sinopsis</label>
            <textarea id="sinopsis" name="sinopsis" cols="40" rows="4" class="form-control" required></textarea>
            <div class="invalid-feedback">Ingrese una sinopsis</div>
        </div>
        <div class="row p-1 justify-content-end">
            <div class="form-group col-1">
                <button name="submit" type="submit" class="btn btn-primary">Enviar</button>
            </div>
            <div class="form-group col-1">
                <button name="borrar" type="reset" class="btn btn-light">Borrar</button>
            </div>
        </div>
    </form>
</div>
<script src="js/validacionFormEj4.js" type="application/javascript"></script>
<?php
include_once "structure/Footer.php"; ?>


