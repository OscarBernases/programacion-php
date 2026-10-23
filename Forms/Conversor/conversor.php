<?php
    include "funciones.php";

    $numero = limpiarCampos($_POST["num"]);
    $operacion = limpiarCampos($_POST["operacion"]);

    echo "<h1>CONVERSOR</h1>";
    echo "Número decimal: {$numero}<br>";

    switch ($operacion) {
        case 'binario':
            $binario = obtenerBinario($numero);
            echo "Número en binario: {$binario}";
            break;
        case 'octal':
            $octal = obtenerOctal($numero);
            echo "Número en octal: {$octal}";
            break;
        case 'hexa':
            $hexadecimal = obtenerHexadecimal($numero);
            echo "Número en hexadecimal: {$hexadecimal}";
            break;
        case 'todos':
            $binario = obtenerBinario($numero);
            $octal = obtenerOctal($numero);
            $hexadecimal = obtenerHexadecimal($numero);
            echo "Número en binario: {$binario}<br>";
            echo "Número en octal: {$octal}<br>";
            echo "Número en hexadecimal: {$hexadecimal}";
            break;
    }
?>