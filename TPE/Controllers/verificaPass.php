<?php

class verificaPass
{
    function validarLogin($datos)
    {
        if (!empty($datos)) {
            $usuario = $datos['user'];
            $contra = $datos['password'];
            $texto = "";

            $arrayUsuarios = array(
                "user1" => "12345678a",
                "hackerman714" => "nnnnnnn5",
                "unUser14" => "p455w0rd",
                "matikpo95" => "um4p4*31",
                "0s0nyer" => "d1jkstr4+e*");

            if (array_key_exists($usuario, $arrayUsuarios)) {
                $pass = $arrayUsuarios[$usuario];
                if ($contra == $pass) {
                    $texto = "<div class='alert alert-success' role='alert'>
  <h4 class='alert-heading'>Credenciales correctas!</h4>
  <p>Se ha logueado correctamente.</p></div>";
                } else {
                    $texto = "<div class='alert alert-danger' role='alert'>
  <h4 class='alert-heading'>Credenciales incorrectas!</h4>
  <p>Intentelo nuevamente.</p></div>";
                }
            } else {
                $texto = "<div class='alert alert-danger' role='alert'>
  <h4 class='alert-heading'>Credenciales incorrectas!</h4>
  <p>Intentelo nuevamente.</p></div>";
            }


        } else {
            $texto = "<h3 class='h3'> Datos inválidos </h3>";

        }
        return $texto;
    }
}