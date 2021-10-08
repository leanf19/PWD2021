<?php

class Session
{


    public function __construct()
    {
        session_start();
    }

    public function iniciar($nombreUsuario, $psw)
    {
        $_SESSION['usnombre'] = $nombreUsuario;
        $_SESSION['uspass'] = $psw;
    }


    public function validar()
    {
        $resp = false;
        if (isset($_SESSION['usnombre'])) {
            if (isset($_SESSION['uspass'])) {
                $psw = $_SESSION['uspass'];
                $usuario = new UsuarioController();
                $lista = $usuario->buscar($_SESSION);
                if ($lista != null) {
                    $_SESSION['activa'] = true;
                    $resp = true;
                }
            }
        }
        return $resp;
    }

    public function activa()
    {
        $resp = false;
        if (session_status() === PHP_SESSION_ACTIVE) {
            $resp = true;
        }
        return $resp;
    }

    public function getUsuario()
    {
        $loggedUser = null;
        if ($this->validar() && $this->activa()) {
            $user = new UsuarioController();
            $lista = $user->buscar($_SESSION);
            $loggedUser = $lista[0];
        }
        return $loggedUser;
    }

    public function getRol()
    {
        //TODO: fix this
        if ($this->getUsuario() !== null) {
            $loggedUser = $this->getUsuario();
            $param = array();
            $param['idusuario'] = $loggedUser->getIdUsuario();
            $objTransUsRol = new UsuarioRolController();
            $lista = $objTransUsRol->buscar($param);
            $objRol = $lista[0];
            $param1 = array();
            $param1['idrol'] = $objRol->getIdRol();
            $objTransRol = new RolController();
            $lista = $objTransRol->buscar($param1);
            $objRol = $lista[0];

        }
        return $objRol;
    }

    public function cerrar()
    {
        if ($this->activa()) {
            session_unset();
            session_destroy();
        }
    }
}

