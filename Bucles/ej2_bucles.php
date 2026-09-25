<HTML>
<HEAD><TITLE> EJ2 Bucles – Tabla multiplicar </TITLE></HEAD>
<BODY>

<table>
    <tr>
        <td>Operacion</td>
        <td>Resultado</td>
    </tr>
<?php

    $num = 8;
    for ($i=1; $i <= 10; $i++) { 

        $resultado = $num * $i;

        echo "<tr>";
        echo "<td>{$num} x {$i}</td>";
        echo "<td>{$resultado}</td>";
        echo "</tr>";
    }
?>
</table>
</BODY>
</HTML>