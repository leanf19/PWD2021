<?php
include_once("../structure/Header.php");
?>

    <div class="container px-5 my-5">
        <div class="text-center p-3">
            <h3>Buscar auto</h3>
        </div>
        <form class="needs-validation" id="patenteForm" name="patenteForm" method="post"
              action="action/buscarAutoAction.php"
              onclick="return validarPatente();" novalidate>
            <div class="form-floating mb-3">
                <input class="form-control" id="patente" name="patente" type="text" placeholder="Patente" required>
                <label for="patente">Patente</label>
                <div class="invalid-feedback">Debe incresar una patente</div>
            </div>
            <div class="d-grid">
                <button class="btn btn-primary" type="submit" value="ENVIAR">ENVIAR</button>
            </div>
        </form>
    </div>

    <script src="js/validaciones.js" TYPE="application/javascript"></script>

<?php
include_once("../structure/Footer.php");
?>
