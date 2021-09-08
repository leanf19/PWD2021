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
            $texto = "El archivo ingresado tiene un formato incorrecto.";
            $uploadOk = 0;
        }

        // Chequea errores
        if ($uploadOk == 0) {
            $texto = "El archivo no ha sido cargado";
            // Lo sube
        } else {
            if (move_uploaded_file($datos["archivo"]["tmp_name"], $archivo)) {
                $texto = "El archivo " . htmlspecialchars(basename($datos["archivo"]["name"])) . " ha sido cargado.";
                $output = file_get_contents($archivo);

                $nombre = htmlspecialchars(basename($datos['archivo']['name']));
                $texto .= "<div class='form-group'>
<label for='texto'>{$nombre}</label>
<textarea class='form-control rounded-0' id='texto' rows='10'>{$output}</textarea>
</div>";

            } else {
                $texto = "Ha ocurrido un error en la carga";
            }
        }
        return $texto;
    }
}