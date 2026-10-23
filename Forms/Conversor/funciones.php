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

?>