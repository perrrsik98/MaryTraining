<?php

$a=5;
$b=10;
$c=Hypotenuse($a,$b);
echo 'Длина стороны A:'.' '. $a;
echo '<br>';

echo 'Длина стороны B:'.' '. $b;
echo '<br>';

echo 'Длина стороны C:'.' '. $c;
echo '<br>';
echo '<hr>';

function Hypotenuse($l, $k) {
    $c=sqrt(pow($l,2)+pow($k,2));
    return $c;
}

