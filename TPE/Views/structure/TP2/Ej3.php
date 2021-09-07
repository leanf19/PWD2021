<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>TP2 - EJ3</title>
</head>
<body>
<?php
include_once "../Header.php";
?>
<div class="container">
    <div class="border-2">
        <h2 class="h2 p-3"> Member Login</h2>
        <div>
            <form id="login" name="login" method="post"
                  action="Ej3-res.php" onsubmit="return validacion();" novalidate>
                <div class="form-group">
                    <label></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-user"></i>
                            </div>
                        </div>
                        <input id="user" name="user" placeholder="Username" type="text"
                               class="form-control" required>
                        <div class="invalid-feedback">Ingrese un usuario</div>
                    </div>
                </div>
                <div class="form-group">
                    <label for="password"></label>
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fa fa-lock"></i>
                            </div>
                        </div>
                        <input id="password" name="password" placeholder="Password" type="text" class="form-control"
                               required>
                        <div class="invalid-feedback">Ingrese una contraseña</div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group col-8">
                        <button name="submit" type="submit" class="btn btn-success">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <script src="../../js/validacionFormEj3.js" type="application/javascript"></script>
    <?php
    include_once "../Footer.php";
    ?>
</body>
</html>
