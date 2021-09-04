<?php

class calcularHorasEj2
{
    function calcularHoras($horas)
    {
        if ($horas != "") {
            $sum = 0;
            $sum += $horas['lunes'];
            $sum += $horas['martes'];
            $sum += $horas['miercoles'];
            $sum += $horas['jueves'];
            $sum += $horas['viernes'];

            if ($sum != 0) {
                $texto = "<h1 class='h1'>Total de horas semanales:{$sum}</h1>";
            } else {
                $texto = "<h1 class='h1'>Usted no tiene horas asignadas para la materia PWD</h1>";
            }
        } else {
            $texto = "<h1 class='h1'>Datos no validos</h1>";
        }
        return $texto;
    }
}