<HTML>
<HEAD><TITLE> EJ5 Strings - Procesamiento de una URL </TITLE></HEAD>
<BODY>
<?php
    $url = "https://www.tienda.es/productos/portatil.php?id=34&marca=lenovo";

    $partesUrl = explode("/", $url);
    $dominio = $partesUrl[2];

    echo "Dominio: {$dominio}<br>";

?>
</BODY>
</HTML>