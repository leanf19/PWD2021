<?php

class cargaArchivoEj2
{
    function cargaArchivotxt($datos)
    {
        $dir = $_SERVER["DOCUMENT_ROOT"] . "/PWD/TPE/Views/files/";
        $archivo = $dir . basename($datos["archivo"]["name"]);
        $uploadOk = 1;
        $extensionArchivo = strtolower(pathinfo($archivo, PATHINFO_EXTENSION));

        // Check de formato
        if ($extensionArchivo != "txt") {
            $texto = "<div class='alert alert-warning' role='alert'>El archivo ingresado tiene un formato incorrecto.</div>";
            $uploadOk = 0;
        }

        // Chequea errores
        if ($uploadOk == 0) {
            $texto = "<div class='alert alert-warning' role='alert'>El archivo no ha sido cargado</div>";
            // Lo sube
        } else {
            if (move_uploaded_file($datos["archivo"]["tmp_name"], $archivo)) {
                $texto = "<div class='pb-3'>El archivo " . htmlspecialchars(basename($datos["archivo"]["name"])) . " ha sido cargado.</div>";
                $output = file_get_contents($archivo);

                $nombre = htmlspecialchars(basename($datos['archivo']['name']));
                $texto .= "<div class='alert alert-info' role='alert'><div class='form-group'>
<label class='pb-3' for='texto'>{$nombre} - Vista previa</label>
<textarea class='form-control rounded-0' id='texto' rows='10'>{$output}</textarea>
</div></div>";
            } else {
                $texto = "<div class='alert alert-danger' role='alert'>Ha ocurrido un error en la carga</div>";
            }
        }
        return $texto;
    }
}