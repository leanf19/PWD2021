<?php

class cargaArchivoEj1
{
    public function cargaArchivo($datos)
    {

        $dir = $_SERVER["DOCUMENT_ROOT"] . "/PWD/TPE/Views/files/";
        //$dir = '../Views/files/';
        $archivo = $dir . basename($datos["archivo"]["name"]);
        $exito = 1;
        $tipo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
        $devolver = [];
        $tam = $datos['archivo']["size"] / 1024;
        $texto = '';

        // Check de formato
        if (!($tipo == "doc" || $tipo == "pdf")) {
            $texto = "El archivo ingresado tiene un formato incorrecto.";
            $exito = 0;
        }
        // Check de tamaño
        if ($tam > 2) {
            $texto = "El archivo supera los 2 MB.";
            $exito = 0;
        }

        // Chequea errores
        if ($exito != 0) {
            if (move_uploaded_file($datos["archivo"]["tmp_name"], $archivo)) {
                $texto = "El archivo " . htmlspecialchars(basename($datos["archivo"]["name"])) . " ha sido cargado.";
                $output = file_get_contents($archivo);

                $nombre = htmlspecialchars(basename($datos['archivo']['name']));
                $texto .= "<div class='form-group'>
                <a href='{$archivo}'>Link al archivo</a>
                </div>";

            } else {
                $texto = "Ha ocurrido un error en la carga";
            }
        }
        return $texto;
    }
}