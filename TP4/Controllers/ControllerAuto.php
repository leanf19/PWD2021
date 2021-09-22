<?php

class ControllerAuto
{
    public static function AltaAuto($Patente, $Marca, $Modelo, $DniDuenio)
    {
        $autoTemp = new Auto();
        $autoTemp->setear($Patente, $Marca, $Modelo, $DniDuenio);

        if (!$autoTemp->cargar()) {
            $autoTemp->insertar();
        }

    }

    public static function BajaAuto($Patente)
    {
        $autoTemp = new Auto();
        $autoTemp->setPatente($Patente);

        if ($autoTemp->cargar()) {
            $autoTemp->eliminar();
        }
    }

    public static function ModificarAuto($Patente, $Marca, $Modelo, $DniDuenio)
    {
        $autoTemp = new Auto();
        $autoTemp->setPatente($Patente);

        if ($autoTemp->cargar()) {
            $autoTemp->setear($Patente, $Marca, $Modelo, $DniDuenio);
            $autoTemp->modificar();
        }
    }

    public static function ListarAutos()
    {
        $arr = Auto::listar();

        return $arr;
    }

    public static function ListarAutosDni($DniDuenio)
    {
        $arr = Auto::listar("DniDuenio = {$DniDuenio}");

        return $arr;
    }

    function buscarAuto(){

    }

}