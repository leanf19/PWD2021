<?php


class ej8Controller
{
    function calcularTarifa($datos)
    {
        if (!empty($datos)) {
            $edad = $datos['edad'];
            $estudios = $datos['esEstudiante'];
            $texto = "";
            $tarifa = "";

            if ($edad != "") {
                if ($edad > 0) {
                    switch ($estudios) {
                        case "Si":
                        {
                            if ($edad > 11) {
                                $tarifa = 180;
                            } else {
                                $tarifa = 160;
                            }
                            break;
                        }
                        case "No":
                        {
                            if ($edad > 11) {
                                $tarifa = 300;
                            } else {
                                $tarifa = 160;
                            }
                            break;
                        }

                    }
                    $texto = "<h3 class='h3'>Su tarifa es de $$tarifa</h3>";
                } else {
                    $texto = "<h3 class='h3'> Datos invalidos </h3>";

                }
            }

        } else {
            $texto = "<h3 class='h3'> No ha completado todos los campos </h3>";
        }

        return $texto;
    }
}