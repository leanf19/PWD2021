<?php
if ($_GET['numero'] != "") {
    $num = $_GET['numero'];
    if ($num == 0) {
        $res = "cero";
    } else if ($num > 0) {
        $res = "positivo";
    } else {
        $res = "negativo";
    }
    echo "<h1>El numero ingresado es {$res}</h1>";
} else {
    echo "<h1>Nada</h1>";
}
?>
<button type="button"><a href="Ejercicio1.html">ATRÁS</a></button>
