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

    function buscarPersona($datos)
    {
        $NroDni = $datos['NroDni'];
        $persTemp = new Persona();
        $arrResp = array();

        $persTemp->setNroDni($NroDni);
        if ($persTemp->cargar()) {
            $arrResp = $persTemp->getDatos();
        }
        return $arrResp;
    }
}