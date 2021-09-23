<?php

include_once(__DIR__ . "/../Models/Auto.php");

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
    /***
    function buscarAuto($datos)
    {
        $patente = $datos['patente'];
        $autoTemp = new Auto();
        $arrResp = array();

        $autoTemp->setPatente($patente);
        if ($autoTemp->cargar()) {
            $arrResp = $autoTemp->getDatos();
        }
        return $arrResp;
    }
    **/
    function buscarAuto($param)
    {
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['Patente']))
                $where.=" and Patente =".$param['Patente'];
            if  (isset($param['Marca']))
                $where.=" and Marca =".$param['Marca'];
            if  (isset($param['Modelo']))
                 $where.=" and Modelo ='".$param['Modelo']."'";
            if  (isset($param['NroDni']))
                 $where.=" and DniDuenio ='".$param['NroDni']."'";
        }
        $arreglo = Auto::listar($where); 
        return $arreglo;
    }

}