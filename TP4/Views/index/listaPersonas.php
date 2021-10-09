<?php
include_once("../structure/Header.php");
include_once '../../Models/Persona.php';
?>

<div class="container text-center p-5 mt-5">
    <table class="table">
        <thead class="thead-dark">
        <tr>
            <th scope="col">DNI</th>
            <th scope="col">Apellido</th>
            <th scope="col">Nombre</th>
            <th scope="col"></th>
        </tr>
        </thead>
        <tbody>
        <?php
        $objPersona = new Persona();
        $listaPersonas = $objPersona->listar();

        if (count($listaPersonas) > 0) {
            foreach ($listaPersonas as $datos) {
                echo '<tr align="center" valign ="bottom" > <td>' . $datos->getNroDni() . '</td>';
                echo '<td>' . ucfirst($datos->getApellido()) . '</td>';
                echo '<td>' . ucfirst($datos->getNombre()) . '</td>';
                #echo '<td><form method="get" action="autosPersona.php"><input type="submit" class="btn btn-dark" value="ver más" /></form></td>';
                echo '<td><button type="button" class="btn btn-link"><a href="autosPersona.php?dni=' . $datos->getNroDni() . '" >ver más</a></button></td>';
            }
        }
        ?>
        </tbody>

    </table>
</div>

<?php
include_once("../structure/Footer.php");
?>
