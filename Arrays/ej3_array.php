<HTML>
<HEAD><TITLE> EJ3 Arrays</TITLE></HEAD>
<BODY>
<?php

    $numeros = array();
    $sumaPares = 0;
    $sumaImpares = 0;
    $contadorPares = 0;
    $contadorImpares = 0;
    $maximoPar = 0;
    $maximoImpar = 0;
    $mediaPares = 0;
    $mediaImpares = 0;

    for ($i=0; $i < 20; $i++) { 
        $numeros[$i] = rand(1, 100);
    }

    foreach ($numeros as $indice => $numero) {

        if ($indice % 2 == 0) {
            $sumaPares = $sumaPares + $numero;
            $contadorPares++;
            if ($numero > $maximoPar) {
                $maximoPar = $numero;
            }
        } else {
            $sumaImpares = $sumaImpares + $numero;
            $contadorImpares++;
            if ($numero > $maximoImpar) {
                $maximoImpar = $numero;
            }
        }
    }

    $mediaPares = $sumaPares / $contadorPares;
    $mediaImpares = $sumaImpares / $contadorImpares;

    echo "<table>";
    echo "<tr><th>Indice</th><th>Valor</th></tr>";
    foreach ($numeros as $indice => $numero) {
        echo "<tr><td>$indice</td><td>$numero</td></tr>";
    }
    echo "</table>";

    echo "Suma de números pares: $sumaPares<br>";
    echo "Suma de números impares: $sumaImpares<br>";
    echo "Cantidad de números pares: $contadorPares<br>";
    echo "Cantidad de números impares: $contadorImpares<br>";
    echo "Máximo número par: $maximoPar<br>";
    echo "Máximo número impar: $maximoImpar<br>";
    echo "Media de números pares: $mediaPares<br>";
    echo "Media de números impares: $mediaImpares<br>";

?>
</BODY>
</HTML>