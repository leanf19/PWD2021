<?php

class ej3Controller
{
    function verificador($datos)
    {
        if (!empty($datos)) {
            $nombre = $datos['nombre'];
            $apellido = $datos['apellido'];
            $edad = $datos['edad'];
            $direccion = $datos['direccion'];

            $texto = "<h3 class='h3'> Hola, yo soy {$nombre} {$apellido} tengo {$edad} y vivo en {$direccion} </h3>";
        } else {
            $texto = "<h3 class='h3'> No hay datos para visualizar </h3>";

        }
        return $texto;
    }
}
