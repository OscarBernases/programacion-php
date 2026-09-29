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
        echo "<tr><td>{$dia}</td><td>{$temperaturas[$i]}</td><td>0</td></tr>";
    }
    echo "</table>";
?>
</BODY>
</HTML>