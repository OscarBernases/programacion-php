<HTML>
<HEAD><TITLE> EJ1 Arrays</TITLE></HEAD>
<BODY>
<?php
    $numerosImpares = array();
    $suma = 0;
    
    for ($i=0; $i < 20; $i++) { 
        $numerosImpares[$i] = 2 * $i + 1;
    }

    echo "<table>";
    echo "<tr><th>Indice</th><th>Valor</th><th>Suma</th></tr>";

    for ($i = 0; $i < count($numerosImpares); $i++) {
        $suma = $suma + $numerosImpares[$i];
        echo "<tr><td>$i</td><td>$numerosImpares[$i]</td><td>$suma</td></tr>";
    }
 
    echo "</table>";
?>
</BODY>
</HTML>