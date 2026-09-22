<HTML>
<HEAD><TITLE> EJ1 Bucles – Estadística secuencia </TITLE></HEAD>
<BODY>
<?php
    $inicio = 1;
    $fin = 100;

    $pares = 0;
    $impares = 0;
    $multiplosTres = 0;
    $suma = 0;

    for ($i = $inicio; $i <= $fin; $i++) {

        $suma = $suma + $i;

        if ($i % 2 == 0) {
            $pares++;
        } else {
            $impares++;
        }

        if ($i % 3 == 0) {
            $multiplosTres++;
        }
    }

    echo "Números del {$inicio} al {$fin}<br><br>";
    echo "Cantidad de números: {$i}<br>";
    echo "Números pares: {$pares}<br>";
    echo "Números impares: {$impares}<br>";
    echo "Multiplos de 3: {$multiplosTres}<br>";
    echo "Suma total: {$suma}";
?>
</BODY>
</HTML>