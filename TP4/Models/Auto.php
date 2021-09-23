<?php
include_once 'connector/BaseDatos.php';
include_once 'Persona.php';
class Auto
{
    private $Patente;
    private $Marca;
    private $Modelo;
    private $duenio;
    private $mensajeoperacion;


    public function __construct()
    {

        $this->Patente = "";
        $this->Marca = "";
        $this->Modelo = -1;
        $this->duenio = new Persona();
    }

    public function setear($Patente, $Marca, $Modelo, $DniDuenio)
    {
        $this->setPatente($Patente);
        $this->setMarca($Marca);
        $this->setModelo($Modelo);
        $this->setDuenio($DniDuenio);
    }


    public function getPatente()
    {
        return $this->Patente;
    }

    public function setPatente($Patente)
    {
        $this->Patente = $Patente;

        return $this;
    }

    public function getMarca()
    {
        return $this->Marca;
    }

    public function setMarca($Marca)
    {
        $this->Marca = $Marca;

        return $this;
    }

    public function getModelo()
    {
        return $this->Modelo;
    }

    public function setModelo($Modelo)
    {
        $this->Modelo = $Modelo;

        return $this;
    }

    public function getDuenio()
    {
        return $this->duenio;
    }

    public function setDuenio($DniDuenio)
    {
        $this->duenio = $this->getDuenio()->setNroDni($DniDuenio);
        $this->getDuenio()->cargar();

        return $this;
    }

    public function getMensajeoperacion()
    {
        return $this->mensajeoperacion;
    }

    public function setMensajeoperacion($mensajeoperacion)
    {
        $this->mensajeoperacion = $mensajeoperacion;

        return $this;
    }

    public function cargar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto WHERE Patente = '{$this->getPatente()}'";
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if ($res > -1) {
                if ($res > 0) {
                    $row = $base->Registro();
                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
                    $resp = true;
                }
            }
        } else {
            $this->setmensajeoperacion("Tabla->listar: " . $base->getError());
        }
        return $resp;
    }

    public function insertar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "INSERT INTO auto(Patente, Marca, Modelo, DniDuenio)  VALUES('" . $this->getPatente() . "', '" . $this->getMarca() . "', '" . $this->getModelo() . "', '" . $this->getDuenio()->getNroDni() . "');";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Tabla->insertar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->insertar: " . $base->getError());
        }
        return $resp;
    }

    public function modificar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "UPDATE auto SET Patente='" . $this->getPatente() . "', Marca='" . $this->getMarca() . "', Modelo='" . $this->getModelo() . "' WHERE DniDuenio=" . $this->getDuenio()->getNroDni();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Tabla->modificar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->modificar: " . $base->getError());
        }
        return $resp;
    }

    public function eliminar()
    {
        $resp = false;
        $base = new BaseDatos();
        $sql = "DELETE FROM auto  WHERE Patente=" . $this->getPatente();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("Tabla->eliminar: " . $base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->eliminar: " . $base->getError());
        }
        return $resp;
    }

    public static function listar($parametro = "")
    {
        $arreglo = array();
        $base = new BaseDatos();
        $sql = "SELECT * FROM auto ";
        if ($parametro != "") {
            $sql .= 'WHERE ' . $parametro;
        }
        $res = $base->Ejecutar($sql);
        if ($res > -1) {
            if ($res > 0) {

                while ($row = $base->Registro()) {
                    $obj = new Auto();
                    $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
                    array_push($arreglo, $obj->getDatos());
                }

            }

        } else {
            $this->setmensajeoperacion("Tabla->listar: " . $base->getError());
        }
        return $arreglo;
    }

    function getDatos()
    {
        $arr = ["patente" => $this->getPatente(),
            "marca" => $this->getMarca(),
            "modelo" => $this->getModelo(),
            "duenio" => $this->getDuenio()];
        return $arr;
    }

    function __toString()
    {
        return "{$this->getPatente()}";
    }

}