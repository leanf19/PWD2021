<?php

class verificaCinema
{
    function verificarDatos($datos)
    {

        $titulo = $datos['titulo'];
        $actores = $datos['actores'];
        $director = $datos['director'];
        $guion = $datos['guion'];
        $produccion = $datos['produccion'];
        $anio = $datos['anio'];
        $nacionalidad = $datos['nacionalidad'];
        $genero = $datos['genero'];
        $duracion = $datos['duracion'];
        $edad = $datos['edad'];

        $texto = "<div class='alert alert-success p-3' role='alert'>
  <p class='alert-heading'>Pelicula ingresada correctamente!</p>
  <hr>";
        $texto .= "<p class='mb-0'>Titulo:{$titulo}</p><br>";
        $texto .= "<p class='mb-0'>Actores:{$actores}</p><br>";
        $texto .= "<p class='mb-0'>Director:{$director}</p><br>";
        $texto .= "<p class='mb-0'>Guión:{$guion}</p><br>";
        $texto .= "<p class='mb-0'>Producción:{$produccion}</p><br>";
        $texto .= "<p class='mb-0'>Año:{$anio}</p><br>";
        $texto .= "<p class='mb-0'>Nacionalidad:{$nacionalidad}</p><br>";
        $texto .= "<p class='mb-0'>Genero:{$genero}</p><br>";
        $texto .= "<p class='mb-0'>Duración:{$duracion}</p><br>";


        $restriccion = "";
        switch ($edad) {
            case "atp":
                $restriccion = "Todo público";
                break;
            case "mayoresSiete":
                $restriccion = "Mayores de 7 años";
                break;
            case "mayoresEdad":
                $restriccion = "Mayores de 18 años";
                break;
        }

        $texto .= "<p class='mb-0'>Restricciones de edad:{$restriccion}</p><br>";
        $texto .= "</div>";
        return $texto;
    }
}