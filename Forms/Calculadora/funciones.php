<?php

function limpiarCampos($campo) {
  $campo = trim($campo);
  $campo = stripslashes($campo);
  $campo = htmlspecialchars($campo);
  return $campo;
}

function sumar($n1, $n2)
{
    $resultado = $n1 + $n2;
    echo "{$n1} + {$n2} = {$resultado}";
}

function restar($n1, $n2)
{
    $resultado = $n1 - $n2;
    echo "{$n1} - {$n2} = {$resultado}";
}

function multiplicar($n1, $n2)
{
    $resultado = $n1 * $n2;
    echo "{$n1} * {$n2} = {$resultado}";
}

function dividir($n1, $n2)
{
    $resultado = $n1 / $n2;
    echo "{$n1} / {$n2} = {$resultado}";
}

?>