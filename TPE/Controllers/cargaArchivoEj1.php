<?php

class cargaArchivoEj1
{
    public function cargaArchivo($datos)
    {
        $end_dir = "files/";
        $dir = $_SERVER["DOCUMENT_ROOT"] . "/PWD/TPE/Views/" . $end_dir;
        $archivo = $dir . basename($datos["archivo"]["name"]);
        $exito = 1;
        $tipo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));
        $devolver = [];
        $tam = $datos['archivo']["size"] / 1048576;
        $texto = '';

        // Check de formato
        if (!($tipo == "doc" || $tipo == "pdf")) {
            $texto = "<div class='alert alert-danger' role='alert'>El archivo ingresado tiene un formato incorrecto.</div>";
            $exito = 0;
        }

        // Check de tamaño
        if ($tam > 2) {

            $texto = "<div class='alert alert-warning' role='alert'>El archivo supera los 2 MB.</div>";
            $exito = 0;
        }

        // Chequea errores
        if ($exito != 0) {
            if (move_uploaded_file($datos["archivo"]["tmp_name"], $archivo)) {
                $texto = "<div class='alert alert-success' role='alert'><h3 class='alert-heading'>El archivo " . htmlspecialchars(basename($datos["archivo"]["name"])) . " ha sido cargado.</h3>";
                $fileDir = $end_dir . basename($datos["archivo"]["name"]);
                $output = file_get_contents($archivo);

                $nombre = htmlspecialchars(basename($datos['archivo']['name']));
                $texto .= "<p>
                <a class='alert-link' href='{$fileDir}'>Link al archivo</a>
                </p>";

            } else {
                $texto = "<div class='alert alert-danger' role='alert'>Ha ocurrido un error en la carga</div>";
            }
        }
        return $texto;
    }
}