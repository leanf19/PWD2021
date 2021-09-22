<?php
include_once 'connector/BaseDatos.php';
class Auto
{
    private $Patente;
    private $Marca;
    private $Modelo;
    private $DniDuenio;
    private $mensajeoperacion;
       

    public function __construct(){
        
        $this->Patente="";
        $this->Marca="";
        $this->Modelo=-1;
        $this->DniDuenio="";
    }
    public function setear($Patente, $Marca, $Modelo, $DniDuenio)    {
        $this->setPatente($Patente);
        $this->setMarca($Marca);
        $this->setModelo($Modelo);
        $this->setDniDuenio($DniDuenio);
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
    public function getDniDuenio()
    {
        return $this->DniDuenio;
    }
    public function setDniDuenio($DniDuenio)
    {
        $this->DniDuenio = $DniDuenio;

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

    public function cargar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="SELECT * FROM auto WHERE DniDuenio = ".$this->getDniDuenio();
        if ($base->Iniciar()) {
            $res = $base->Ejecutar($sql);
            if($res>-1){
                if($res>0){
                    $row = $base->Registro();
                    $this->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
                }
            }
        } else {
            $this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        return $resp;        
    }

    public function insertar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="INSERT INTO auto(Patente, Marca, Modelo, DniDuenio)  VALUES('".$this->getPatente()."', '".$this->getMarca()."', '".$this->getModelo()."', '".$this->getDniDuenio()."');";
        if ($base->Iniciar()) {
            if ($elid = $base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->insertar: ".$base->getError());
        }
        return $resp;
    }

    public function modificar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="UPDATE auto SET Patente='".$this->getPatente()."', Marca='".$this->getMarca()."', Modelo='".$this->getModelo()."' WHERE DniDuenio=".$this->getDniDuenio();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                $resp = true;
            } else {
                $this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->modificar: ".$base->getError());
        }
        return $resp;
    }

    public function eliminar(){
        $resp = false;
        $base=new BaseDatos();
        $sql="DELETE FROM auto  WHERE DniDuenio=".$this->getDniDuenio();
        if ($base->Iniciar()) {
            if ($base->Ejecutar($sql)) {
                return true;
            } else {
                $this->setmensajeoperacion("Tabla->eliminar: ".$base->getError());
            }
        } else {
            $this->setmensajeoperacion("Tabla->eliminar: ".$base->getError());
        }
        return $resp;
    }

    public static function listar($parametro=""){
        $arreglo = array();
        $base=new BaseDatos();
        $sql="SELECT * FROM auto ";
        if ($parametro!="") {
            $sql.='WHERE '.$parametro;
        }
        $res = $base->Ejecutar($sql);
        if($res>-1){
            if($res>0){
                
                while ($row = $base->Registro()){
                    $obj= new Tabla();
                    $obj->setear($row['Patente'], $row['Marca'], $row['Modelo'], $row['DniDuenio']);
                    array_push($arreglo, $obj);
                }
               
            }
            
        } else {
            $this->setmensajeoperacion("Tabla->listar: ".$base->getError());
        }
        return $arreglo;
    }

}