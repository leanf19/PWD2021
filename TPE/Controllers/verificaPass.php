<?php

class verificaPass
{
    function validarLogin($datos)
    {
        if (!empty($datos)) {
            $usuario = $datos['user'];
            $contra= $datos['password'];
            $texto = "";

            $arrayUsuarios[] = array(
                array("user1" => "12345678"),
                array("hackerman714" => "ññññññññ"),
                array("unUser14" => "p455w0rd?"),
                array("matikpo95" => "um4p4*31"),
                array("0s0nyer" => "d1jkstr4+e*"));

            if(array_key_exists($usuario, $arrayUsuarios)){
                $pass = $arrayUsuarios[$usuario];
                if($contra == $pass){
                    $texto = "<h3 class='h3'> Credenciales correctas! BIENVENIDO! </h3>";
                }
                else {
                    $texto = "<h3 class='h3'> ¡CREDENCIALES INCORRECTAS! Intente nuevamente  </h3>";
                }
            } else{
                $texto = "<h3 class='h3'> ¡CREDENCIALES INCORRECTAS! Intente nuevamente  </h3>";
            }


        } else {
            $texto = "<h3 class='h3'> No hay datos para visualizar </h3>";

        }
        return $texto;
    }
}