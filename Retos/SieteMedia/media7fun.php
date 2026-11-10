<?php

function limpiarCampos($campo) {
  $campo = trim($campo);
  $campo = stripslashes($campo);
  $campo = htmlspecialchars($campo);
  return $campo;
}

// Serán 10 de cada palo, 1 al 10 primer palo, asi consecutivamente
function crearBaraja()
{
    $baraja = array();

    for ($i = 1; $i <= 40 ; $i++) {
        $baraja[$i] = $i;
    }

    return $baraja;
}

function restarNumero ($num) {

    if ($num > 30) {
        $num = $num - 30;
    } elseif ($num > 20) {
        $num = $num - 20;
    } elseif ($num > 10) {
        $num = $num - 10;
    } else {
        return $num;
    }

    return $num;
}

?>