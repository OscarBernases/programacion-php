<HTML>
<HEAD><TITLE> EJ4 Bucles – Número primo </TITLE></HEAD>
<BODY>
<?php
    $num = 17;
    $primo = true;

    echo "Número analizado: {$num}<br><br>";

    for ($div=2; $div < $num; $div++) { 
        if ($num % $div == 0) {
            echo "Probando divisor {$div} -> Divisible<br>";
            $primo = false;
        } else {
            echo "Probando divisor {$div} -> No divisible<br>";
        }
    }

    echo "<br>";
    if ($primo) {
        echo "{$num} es un número primo";
    } else {
        echo "{$num} NO es un número primo";
    }
?>
</BODY>
</HTML>