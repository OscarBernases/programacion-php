<?php

function limpiarCampos($campo) {
  $campo = trim($campo);
  $campo = stripslashes($campo);
  $campo = htmlspecialchars($campo);
  return $campo;
}

function visualizarFicheroSinHora($fichero) {
  $lineas = file($fichero);
  $totalLineas = count($lineas);

  echo "<table border='1'>";
  echo "<tr><th>Valor</th><th>Ultimo</th><th>Var. %</th><th>Var.</th><th>Ac. % Año</th><th>Max</th><th>Min</th><th>Vol</th><th>Capit</th></tr>";
  for ($i=1; $i < $totalLineas; $i++) { 
      visualizarLineaSinHora($lineas[$i]);
  }
  echo "</table>";
}

function buscarValor($fichero, $buscado) {

    $lineas = file($fichero);
    $totalLineas = count($lineas);
    $encontrado = false;

    for ($i = 1; $i < $totalLineas && $encontrado == false; $i++) {
        $valor = trim(substr($lineas[$i], 0, 23));

        if ($valor == $buscado) {
            visualizarValor($lineas[$i]);
            $encontrado = true;
        }
    }

    if (!$encontrado) {
        echo "No se ha encontrado el valor.";
    }
}

function visualizarLineaSinHora($linea) {
  $valor = trim(substr($linea, 0, 23)); 
  $ultimo = trim(substr($linea, 23, 9));
  $varPorcentaje = trim(substr($linea, 32, 8));
  $var = trim(substr($linea, 40, 8));
  $acAño = trim(substr($linea, 48, 12));
  $max = trim(substr($linea, 60, 8));
  $min = trim(substr($linea, 68, 9));
  $vol = trim(substr($linea, 77, 13));
  $capit = trim(substr($linea, 90, 9));

  echo "<tr>";
  echo "<td>{$valor}</td>";
  echo "<td>{$ultimo}</td>";
  echo "<td>{$varPorcentaje}</td>";
  echo "<td>{$var}</td>";
  echo "<td>{$acAño}</td>";
  echo "<td>{$max}</td>";
  echo "<td>{$min}</td>";
  echo "<td>{$vol}</td>";
  echo "<td>{$capit}</td>";
  echo "</tr>";
}

function visualizarValor($linea) {
  $valor = trim(substr($linea, 0, 23)); 
  $ultimo = trim(substr($linea, 23, 9));
  $varPorcentaje = trim(substr($linea, 32, 8));
  $var = trim(substr($linea, 40, 8));
  $acAño = trim(substr($linea, 48, 12));
  $max = trim(substr($linea, 60, 8));
  $min = trim(substr($linea, 68, 9));
  $vol = trim(substr($linea, 77, 13));
  $capit = trim(substr($linea, 90, 9));

  echo "<h4>Datos de cotización de {$valor}</h4>";
  echo "<table border='1'>";
  echo "<tr><td>Valor:</td><td>{$valor}</td></tr>";
  echo "<tr><td>Último:</td><td>{$ultimo}</td></tr>";
  echo "<tr><td>Variación %:</td><td>{$varPorcentaje}</td></tr>";
  echo "<tr><td>Variación:</td><td>{$var}</td></tr>";
  echo "<tr><td>Ac. + año:</td><td>{$acAño}</td></tr>";
  echo "<tr><td>Máximo:</td><td>{$max}</td></tr>";
  echo "<tr><td>Mínimo:</td><td>{$min}</td></tr>";
  echo "<tr><td>Volumen:</td><td>{$vol}</td></tr>";
  echo "<tr><td>Capitalización:</td><td>{$capit}</td></tr>";
  echo "</table>";
}
?>