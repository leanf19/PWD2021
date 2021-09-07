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
                    $texto = "<h3 class='h3'> Credenciales correctas! BIENVENIDO! </h3>";
                } else {
                    $texto = "<h3 class='h3'> ¡CREDENCIALES INCORRECTAS! Intente nuevamente  </h3>";
                }
            } else {
                $texto = "<h3 class='h3'> ¡CREDENCIALES INCORRECTAS! Intente nuevamente  </h3>";
            }


        } else {
            $texto = "<h3 class='h3'> No hay datos para visualizar </h3>";

        }
        return $texto;
    }
}