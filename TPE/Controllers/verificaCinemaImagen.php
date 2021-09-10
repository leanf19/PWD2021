<?php

class verificaCinemaImagen
{
    function verificarDatos($datos)
    {
        $texto = "<div class='col-10'>";
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

        $texto .= "<h4 class='h4'>Titulo:{$titulo}</h4><br>";
        $texto .= "<h4 class='h4'>Actores:{$actores}</h4><br>";
        $texto .= "<h4 class='h4'>Director:{$director}</h4><br>";
        $texto .= "<h4 class='h4'>Guión:{$guion}</h4><br>";
        $texto .= "<h4 class='h4'>Producción:{$produccion}</h4><br>";
        $texto .= "<h4 class='h4'>Año:{$anio}</h4><br>";
        $texto .= "<h4 class='h4'>Nacionalidad:{$nacionalidad}</h4><br>";
        $texto .= "<h4 class='h4'>Genero:{$genero}</h4><br>";
        $texto .= "<h4 class='h4'>Duración:{$duracion}</h4><br>";


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

        $texto .= "<h4 class='h4'>Restricciones de edad:{$restriccion}</h4><br>";
        $texto .= "</div>";

        return $texto;
    }

    function cargaImg($datos)
    {
        $texto = "";
        $dir = $_SERVER["DOCUMENT_ROOT"] . "/PWD/TPE/Views/files/img/";
        $portada = $dir . basename($datos['portada']["name"]);
        $uploadOk = 1;
        $extensionportada = strtolower(pathinfo($portada, PATHINFO_EXTENSION));

        // Check de formato
        if ($extensionportada == "jpg" || $extensionportada == "png" || $extensionportada == "jpeg") {
            if (move_uploaded_file($datos["portada"]["tmp_name"], $portada)) {
                $texto = basename($datos['portada']["name"]);
            }
        }
        return $texto;
    }


}