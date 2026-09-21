<HTML>
<HEAD><TITLE> EJ1 Strings – Conversor de Decimal a Binario </TITLE></HEAD>
<BODY>
<?php
    $ip="192.18.16.204";
    $ip2="10.33.161.2";

    $partes = explode(".", $ip);

    $binario = sprintf("%08b.%08b.%08b.%08b", $partes[0],$partes[1],$partes[2],$partes[3]);
    $partes = explode(".", $ip2);
    $binario2 = sprintf("%08b.%08b.%08b.%08b", $partes[0],$partes[1],$partes[2],$partes[3]);

    echo "IP {$ip} en binario es {$binario}<br>";
    echo "IP {$ip2} en binario es {$binario2}";

    
?>
</BODY>
</HTML>