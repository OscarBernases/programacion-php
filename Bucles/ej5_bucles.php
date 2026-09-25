<HTML>
<HEAD><TITLE> EJ5 Bucles - Factorial </TITLE></HEAD>
<BODY>
<?php
    $num = 5;
    $factorial = 1;

    echo "{$num}! = ";
    for ($i = $num; $i >= 1; $i--) {
        $factorial = $factorial * $i;
        if ($i != 1) {
           echo "{$i} x ";
        } else {
            echo " 1 ";
        }
    }

  echo "= {$factorial}";

?>
</BODY>
</HTML>