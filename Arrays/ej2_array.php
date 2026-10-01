<HTML>
<HEAD><TITLE> EJ2 Arrays</TITLE></HEAD>
<BODY>
<?php
    $temperaturas = array (18, 21, 19, 24, 25, 22, 20, 26, 23, 21);
    $diferencia = array();
    $maxima = 0;
    $diaMaxima = 1;
    $minima = $temperaturas[0];
    $diaMinima= 1;
    $suma = 0;
    $diasEncimaMedia = 0;

    echo "<table>";
    echo "<tr><th>Dia</th><th>Temperatura</th><th>Diferencia dia anterior</th></tr>";

    for ($i = 0; $i < count($temperaturas); $i++) {
        $dia = $i + 1;

        // AÑADIR DIFERENCIA DE TEMPERATURA A ARRAY
        if ($i == 0) {
            $diferencia[$i] = "-";
        } else {
            $diferencia[$i] = $temperaturas[$i] - $temperaturas[$i - 1];
        }

        // FORMATO NEGATIVO O POSITIVO EN TABLA
        if ($diferencia[$i] > 0) {
            echo "<tr><td>{$dia}</td><td>{$temperaturas[$i]}</td><td>+{$diferencia[$i]}</td></tr>";
        } else {
            echo "<tr><td>{$dia}</td><td>{$temperaturas[$i]}</td><td>{$diferencia[$i]}</td></tr>";
        }

        // SUMA DE TODAS LAS TEMPERATURAS PARA DESPUES MEDIA
        $suma = $suma + $temperaturas[$i];

        // GUARDAR TEMPERATURA MAXIMA
        if ($temperaturas[$i] > $maxima) {
            $maxima = $temperaturas[$i];
            $diaMaxima = $dia;
        }

        // GUARDAR TEMPERATURA MINIMA
        if ($temperaturas[$i] < $minima) {
            $minima = $temperaturas[$i];
            $diaMinima = $dia;
        }
    }

    echo "</table>";

    $media = $suma / count($temperaturas);

    for ($i=0; $i < count($temperaturas); $i++) { 
        if ($temperaturas[$i] > $media) {
            $diasEncimaMedia = $diasEncimaMedia + 1;
        }
    }

    echo "Temperatura máxima: {$maxima} en el día {$diaMaxima}<br>";
    echo "Temperatura mínima: {$minima} en el día {$diaMinima}<br>";
    echo "Temperatura media:  {$media}<br>";
    echo "Días por encima de la media: {$diasEncimaMedia}<br>";
?>
</BODY>
</HTML>