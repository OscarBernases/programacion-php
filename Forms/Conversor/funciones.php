<?php

function limpiarCampos($campo) {
  $campo = trim($campo);
  $campo = stripslashes($campo);
  $campo = htmlspecialchars($campo);
  return $campo;
}

function obtenerBinario($num) {
    $binario = decbin($num);
    return $binario;
}

function obtenerOctal($num) {
    $octal = decoct($num);
    return $octal;
}

function obtenerHexadecimal($num) {
    $hexadecimal = strtoupper(dechex($num));
    return $hexadecimal;
}

function visualizar($num, $operacion) {

    echo "<h1>CONVERSOR</h1>";
    echo "Número decimal: {$num}<br>";

    switch ($operacion) {

        case 'binario':
            $binario = obtenerBinario($num);
            echo "Número en binario: {$binario}";
            break;

        case 'octal':
            $octal = obtenerOctal($num);
            echo "Número en octal: {$octal}";
            break;

        case 'hexa':
            $hexadecimal = obtenerHexadecimal($num);
            echo "Número en hexadecimal: {$hexadecimal}";
            break;

        case 'todos':
            $binario = obtenerBinario($num);
            $octal = obtenerOctal($num);
            $hexadecimal = obtenerHexadecimal($num);
            echo "Número en binario: {$binario}<br>";
            echo "Número en octal: {$octal}<br>";
            echo "Número en hexadecimal: {$hexadecimal}<br>";
            break;
    }
}

?>