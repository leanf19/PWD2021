<?php
include_once(__DIR__ . "/../Models/Persona.php");

class ControllerPersona
{
    public static function AltaPersona($NroDni, $Apellido, $Nombre, $fechaNac, $Telefono, $Domicilio)
    {
        $persTemp = new Persona();
        $persTemp->setear($NroDni, $Apellido, $Nombre, $fechaNac, $Telefono, $Domicilio);

        if (!$persTemp->cargar()) {
            $persTemp->insertar();
        }

    }

    public static function BajaPersona($NroDni)
    {
        $persTemp = new Persona();
        $persTemp->setNroDni($NroDni);

        if ($persTemp->cargar()) {
            $persTemp->eliminar();
        }
    }

    public static function ModificarPersona($NroDni, $Apellido, $Nombre, $fechaNac, $Telefono, $Domicilio)
    {
        $persTemp = new Persona();
        $persTemp->setNroDni($NroDni);

        if ($persTemp->cargar()) {
            $persTemp->setear($NroDni, $Apellido, $Nombre, $fechaNac, $Telefono, $Domicilio);
            $persTemp->modificar();
        }
    }

    public static function ListarPersonas()
    {
        $arr = Persona::listar();

        return $arr;
    }

    function buscarPersona($param)
    {
        $where = " true ";
        if ($param<>NULL){
            if  (isset($param['NroDni']))
                $where.=" and NroDni =".$param['NroDni'];
            if  (isset($param['Apellido']))
                $where.=" and Apellido =".$param['Apellido'];
            if  (isset($param['Nombre']))
                 $where.=" and Nombre ='".$param['Nombre']."'";
            if  (isset($param['fechaNac']))
                 $where.=" and fechaNac ='".$param['fechaNac']."'";
            if  (isset($param['Telefono']))
                 $where.=" and Telefono ='".$param['Telefono']."'";
            if  (isset($param['Domicilio']))
                 $where.=" and Domicilio ='".$param['Domicilio']."'";
        }
        $arreglo = Persona::listar($where); 
        return $arreglo;
    }
}