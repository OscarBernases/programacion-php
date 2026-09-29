<HTML>
<HEAD><TITLE> EJ2 Arrays</TITLE></HEAD>
<BODY>
<?php
    $temperaturas = array (18, 21, 19, 24, 25, 22, 20, 26, 23, 21);
    $maxima = 0;
    echo "<table>";
    echo "<tr><th>Dia</th><th>Temperatura</th><th>Diferencia dia anterior</th></tr>";

    for ($i = 0; $i < count($temperaturas); $i++) {
        $dia = $i + 1;

        if ($i == 0) {
            $diferencia = 0;
        } else {
            $diferencia = $temperaturas[$i] - $temperaturas[$i - 1];
        }

        echo "<tr><td>{$i}</td><td>{$temperaturas[$i]}</td><td>{$diferencia}</td></tr>";
    }
    echo "</table>";

    
    // VER TEMPERATURA MAXIMA
    // VER TEMPERATURA MINIMA
    // TEMPERATURA MEDIA
    // NUMERO DIAS ENCIMA MEDIA
?>
</BODY>
</HTML>