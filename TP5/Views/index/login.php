<?php
include_once "../structure/Header.php";
?>
    <div class="container p-5">
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <div class="bg-dark mt-4 p-4">
                    <form action="../Accion/verificarLogin.php" method="post" class="row g-3" onsubmit="return verificarLogin();"
                          novalidate>
                        <h4 class="text-white text-center">Member login</h4>
                        <div class="col-12">
                            <label class="text-white">Usuario</label>
                            <input type="text" name="user" id="user" class="form-control" placeholder="Usuario">
                            <div class="invalid-feedback">Ingrese un usuario</div>
                        </div>
                        <div class="col-12">
                            <label class="text-white">Contraseña</label>
                            <input type="password" name="password" id="password" class="form-control"
                                   placeholder="Password">
                            <div class="invalid-feedback">Ingrese una contraseña</div>
                        </div>
                        <div class="col-12">
                            <button type="submit" class="btn btn-light float-end">Login</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
include_once "../structure/Footer.php";
?>