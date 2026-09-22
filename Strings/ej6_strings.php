<HTML>
<HEAD><TITLE> EJ6 Strings - Analizador de log de servidor </TITLE></HEAD>
<BODY>
<?php
    $log = "192.168.1.25 - GET /productos/listado.php - 200 - Mozilla/5.0";

    $partes = explode(" - ", $log);

    $ip = $partes[0];
    $metodoRecurso = $partes[1]; // GET /productos/listado.php
    $codigo = $partes[2];
    $navegador = $partes[3];

    echo "IP: {$ip}<br>";
    echo "Código HTTP: {$codigo}<br>";
    echo "Navegador: {$navegador}<br><br>";
?>
</BODY>
</HTML>