<?php

include_once(__DIR__ . "/../Models/Persona.php");

class ControllerPersona
{
    public static function AltaPersona($NroDni, $Apellido, $Nombre, $fechaNac, $Telefono, $Domicilio)
    {
        $PersonaTemp = new Persona();
        $PersonaTemp->setear($NroDni, $Apellido, $Nombre, $fechaNac, $Telefono, $Domicilio);
        $resp = false;
        if (!$PersonaTemp->cargar()) {
            $resp = $PersonaTemp->insertar();
        }
        return $resp;
    }

    public static function BajaPersona($NroDni)
    {
        $PersonaTemp = new Persona();
        $PersonaTemp->setNroDni($NroDni);

        if ($PersonaTemp->cargar()) {
            $PersonaTemp->eliminar();
        }
    }

    public static function ModificarPersona($NroDni, $Apellido, $Nombre, $fechaNac, $Telefono, $Domicilio)
    {
        $PersonaTemp = new Persona();
        $PersonaTemp->setNroDni($NroDni);

        if ($PersonaTemp->cargar()) {
            $PersonaTemp->setear($NroDni, $Apellido, $Nombre, $fechaNac, $Telefono, $Domicilio);
            $PersonaTemp->modificar();
        }
    }

    public static function ListarPersonas()
    {
        $arr = Persona::listar();

        return $arr;
    }

    function insertarPersona($datos)
    {
        return self::AltaPersona($datos["dni"], $datos["apellido"], $datos["nombre"], $datos["fechaDeNacimiento"], $datos["telefono"], $datos["domicilio"]);
    }

    static function buscarPersona($datos)
    {
        $dni = $datos['dni'];
        $PersonaTemp = new Persona();
        $PersonaTemp->setNroDni($dni);

        if (!$PersonaTemp->cargar()) {
            $response = null;
        } else {
            $response = $PersonaTemp;
        }
        return $response;
    }

    static function existePersona($datos)
    {
        $tempPersona = new Persona();
        $response = false;
        if ($datos['dni'] !== null) {
            $tempPersona->setNroDni($datos['dni']);
            $response = $tempPersona->cargar();
        }
        return $response;
    }

}