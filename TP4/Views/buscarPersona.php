<?php
include_once("structure/Header.php");
?>

     <div class="container px-5 my-5">
        <div class="text-center p-3">
            <h3>Buscar Persona</h3>
        </div>
        <form id="dniPersona" name="dniPersona" method="post" action="action/buscarPersonaAction.php">
            <div class="form-floating mb-3">
                <input class="form-control" id="NroDni" name="NroDni" type="text" placeholder="DNI" required>
                <label for="dni">DNI</label>
                <div class="invalid-feedback">Debe ingresar un DNI valido.</div>
            </div>
            <div class="d-grid">
                <button class="btn btn-dark" id="submitButton" type="submit">Submit</button>
            </div>
    </form>
    </div>

<?php
include_once("structure/Footer.php");
?>