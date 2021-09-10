<?php
include_once "structure/Header.php"; ?>

<div class="container text-center p-4 content-align-center">
    <form id="formulario2" name="formulario2" method="get" action="Ej2-res.php">
        <div class="form-group p-2">
            <label>Ingrese las horas de cursada de PWD:</label>
            <input id="lunes" name="lunes" type="number" placeholder="lunes" required>
            <input id="martes" name="martes" type="number" placeholder="martes" required>
            <input id="miercoles" name="miercoles" type="number" placeholder="miercoles" required>
            <input id="jueves" name="jueves" type="number" placeholder="jueves" required>
            <input id="viernes" name="viernes" type="number" placeholder="viernes" required>
        </div>
        <button class="btn btn-primary bg-dark" type="submit" value="ENVIAR">ENVIAR</button>
    </form>
</div>

<?php
include_once "structure/Footer.php"; ?>


