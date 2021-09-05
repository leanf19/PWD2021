<?php

class ej4Controller
{
    function verificarEdad($datos)
    {
        if (!empty($datos)) {
            $nombre = $datos['nombre'];
            $apellido = $datos['apellido'];
            $edad = $datos['edad'];
            $direccion = $datos['direccion'];


            $texto = "<h3 class='h3'> Hola, yo soy {$nombre} {$apellido} tengo {$edad} años y vivo en {$direccion}.";

            if ($edad >= 18) {
                $texto .= " Soy mayor de edad. </h3>";
            } else if ($edad > 0) {
                $texto .= " Soy menor de edad. </h3>";
            } else {
                $texto = "<h3>Datos inválidos</h3>";
            }
        } else {
            $texto = "<h3 class='h3'> No hay datos para visualizar </h3>";

        }
        return $texto;
    }
}