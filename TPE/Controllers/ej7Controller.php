<?php


class ej7Controller
{
    function realizarCalculo($datos)
    {
        if (!empty($datos)) {
            $a = $datos['A'];
            $b = $datos['B'];
            $operacion = $datos['Operacion'];
            $texto = "";
        }
        if ($a != "" && $b != "" && $operacion != "") {
            switch ($operacion) {
                case "+":
                    $suma = $a + $b;
                    $texto = "<br><h4 class='h4'>El resultado de la SUMA entre A y B es: $suma";
                    break;
                case "-":
                    $resta = $a - $b;
                    $texto = "<br><h4 class='h4'>El resultado de la RESTA entre A y B es: $resta";
                    break;
                case "*":
                    $multiplicacion = $a * $b;
                    $texto = "<br><h4 class='h4'>El resultado de la MULTIPLICACION entre A y B es: $multiplicacion";
                    break;
                case "/":
                    if($b != 0){
                    $division = $a / $b;
                    $texto = "<br><h4 class='h4'>El resultado de la DIVISION entre A y B es: $division"; }
                    else {
                        $texto = "NO SE PUEDE DIVIDIR POR CERO";
                    }
                    break;
            }
        } else {
            $texto = "<h3>No ha completado todos los campos para realizar el calculo</h3>";
        }
        return $texto;
    }




}