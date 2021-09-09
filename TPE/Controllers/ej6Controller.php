<?php

class ej6Controller
{
    function verificarDatos($datos)
    {
        if (!empty($datos)) {
            $cantDeportes = 0;
            $nombre = $datos['nombre'];
            $apellido = $datos['apellido'];
            $edad = $datos['edad'];
            $sexo = $datos['sexo'];
            $estudios = $datos['estudios'];
            $direccion = $datos['direccion'];
            if (isset($datos['deporte'])) {
                $deportes = $datos['deporte'];
            }
            if (isset($deportes)) {
                $cantDeportes = count($deportes);
            }

            $texto = "<h3 class='h3'> Hola, yo soy {$nombre} {$apellido} tengo {$edad} años y vivo en {$direccion}.";

            if ($edad >= 18) {
                $texto .= " Soy mayor de edad. </h3>";
            } else if ($edad > 0) {
                $texto .= " Soy menor de edad. </h3>";
            } else {
                $texto = "<h3>Datos inválidos</h3>";
            }

            switch ($sexo) {
                case "f":
                    $texto .= "<br><h4 class='h4'>Soy mujer";
                    break;
                case "m":
                    $texto .= "<br><h4 class='h4'>Soy hombre";
                    break;
                case "x":
                    $texto .= "<br><h4 class='h4'>Soy binario";
                    break;
            }

            switch ($estudios) {
                case "sinEstudios":
                    $texto .= " y no tengo estudios.</h4>";
                    break;
                case "estudiosPrimarios":
                    $texto .= " y tengo estudios primarios.</h4>";
                    break;
                case "estudiosSecundarios":
                    $texto .= " y tengo estudios secundarios.</h4>";
                    break;
            }
            if ($cantDeportes>0){
            $texto .= "<h4 class='h4'>Practico $cantDeportes deportes.</h4>";
            }else{
                $texto .= "<h4 class='h4'>No practico deportes.</h4>";
            }

        } else {
            $texto = "<h3 class='h3'> No hay datos para visualizar </h3>";

        }
        return $texto;
    }
}