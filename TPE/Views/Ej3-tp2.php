<?php
include_once "structure/Header.php"; ?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

<title>TP2 - EJ3</title>
</head>
<body>
<?php
include_once "structure/Header.php"; ?>


<div class="container">
    <div class="row">
        <div class="col-md-4 offset-md-4">
            <div class="bg-light mt-4 p-4">
                <form action="Ej3-tp2-res.php" method="post" class="row g-3" onsubmit="return validacion();" novalidate>
                    <h4>Member login</h4>
                    <div class="col-12">
                        <label>Usuario</label>
                        <input type="text" name="user" id="user" class="form-control" placeholder="Usuario">
                        <div class="invalid-feedback">Ingrese un usuario</div>
                    </div>
                    <div class="col-12">
                        <label>Contraseña</label>
                        <input type="password" name="password" id="password" class="form-control"
                               placeholder="Password">
                        <div class="invalid-feedback">Ingrese una contraseña</div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-dark float-end">Login</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>


<script src="js/validacionFormEj3.js" type="application/javascript"></script>
<?php
include_once "structure/Footer.php"; ?>
</body>
</html>
