<?php
include_once "structure/Header.php"; ?>
    <div class="container text-center p-3">
        <div class="row pb-2">
            <h3 class="h3">Ejercicio 3</h3>
        </div>
        <div class="row d-flex align-content-end flex-wrap">
            <form id="formulario3" name="formulario3" method="post" action="Ej3-res.php">
                <div class="form-group p-2">
                    <label>Nombre</label>
                    <input name="nombre" id="nombre" required>
                </div>
                <div class="form-group p-2">
                    <label>Apellido</label>
                    <input name="apellido" id="apellido" required>
                </div>
                <div class="form-group p-2">
                    <label>Edad</label>
                    <input name="edad" id="edad" type="number" required>
                </div>
                <div class="form-group p-2">
                    <label>Direccion</label>
                    <input name="direccion" id="direccion" required> <br>
                </div>
                <button class="btn btn-primary bg-dark" type="submit">Enviar</button>
            </form>
        </div>
    </div>

<?php
include_once "structure/Footer.php"; ?>