<?php

class vernumero
{
    function verificarNumero($datos)
    {
        if ($datos['numero'] != "") {
            $num = $datos['numero'];
            if ($num == 0) {
                $res = "cero";
            } else if ($num > 0) {
                $res = "positivo";
            } else {
                $res = "negativo";
            }
            $texto = "<h1 class='h1'>El numero ingresado es {$res}</h1>";
        } else {
            $texto = "<h1 class='h1'>No ha ingresado ningun numero</h1>";
        }
        return $texto;
    }

}
