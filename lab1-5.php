<?php

$a = rand (-20, 20);
$b = rand (-20, 20);
$c = rand (-20, 20);
$d = rand (-20, 20);
$sum13 = ($c * ( $b  + 23 ))/(( $a/2) - 4 * $d - 1);
$sum1 = (2 * $c - $d)/(( $a/4) - 1);
echo '13 Вариант: ( ' . $c . ' * ( ' . $b . ' + 23 )/(' . '( ' . $a . '/2 ) - 4 * ' . $d . ' - 1 )) = ' . $sum13 . "<br>";
echo '1 Вариант: ( 2 * ' . $c . ' -' . $d . ' )/(' . '( ' . $a . '/4 ) - 1 )) = ' . $sum1;

