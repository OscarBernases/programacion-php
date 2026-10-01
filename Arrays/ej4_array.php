<HTML>
<HEAD><TITLE> EJ4 Arrays</TITLE></HEAD>
<BODY>
<?php
    $decimal = array();
    $binario = array();
    $octal = array();
    $hexadecimal = array();

    for ($i = 0; $i <= 20; $i++) {
        $decimal[$i] = $i;
    }
    
    foreach ($decimal as $indice => $numero) {
        $binario[$indice] = decbin($numero);
        $octal[$indice] = decoct($numero);
        $hexadecimal[$indice] = dechex($numero);
    }
    
    // Mostrar la tabla
    echo "<table>";
    echo "<tr><th>Decimal</th><th>Binario</th><th>Octal</th><th>Hexadecimal</th></tr>";
    for ($i = 0; $i < count($decimal); $i++) {
        echo "<tr>";
        echo "<td>{$decimal[$i]}</td>";
        echo "<td>{$binario[$i]}</td>";
        echo "<td>{$octal[$i]}</td>";
        echo "<td>{$hexadecimal[$i]}</td>";
        echo "</tr>";
    }
    echo "</table>";
?>
</BODY>
</HTML>