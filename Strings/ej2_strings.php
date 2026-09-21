<HTML>
<HEAD><TITLE> EJ2 Strings - Analizador de nombre de usuario </TITLE></HEAD>
<BODY>
<?php
    $nombre = " aLBeRTo gaRCia loPEz ";

    $nombreLimpio = trim($nombre);
    echo "Cadena original: {$nombreLimpio}<br>";

    $nombreNormalizado = ucwords(strtolower($nombreLimpio));
    echo "Nombre normalizado: {$nombreNormalizado}<br>";
?>
</BODY>
</HTML>
