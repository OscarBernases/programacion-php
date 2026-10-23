<?php
include "funciones.php";

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacion = $_POST["operacion"];

    echo "<h1>CALCULADORA</h1>";
    echo "<h2>RESULTADO:</h2>";

    switch ($operacion) {
        case 'suma':
            sumar($num1, $num2);
            break;

        case 'resta':
            restar($num1, $num2);
            break;
        case 'multiplicacion':
            multiplicar($num1, $num2);
            break;
        case 'division':
            dividir($num1, $num2);
            break;
    }
?>