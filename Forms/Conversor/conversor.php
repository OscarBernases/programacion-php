<?php
    include "funciones.php";

    $numero = limpiarCampos($_POST["num"]);
    $operacion = limpiarCampos($_POST["operacion"]);

    visualizar($numero, $operacion);
?>