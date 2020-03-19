<?php

//1
function RectangleArea($x,$y) {
    $s=$x*$y;
    return $s;
}

$a=5;
$b=8;
$s=RectangleArea($a,$b);
echo 'Площадь прямоугольника = '.$s;


echo '<br>';
echo '<hr>';
//2

function Diagonal($x,$y) {
    $d=sqrt(pow($x,2)+pow($y,2));
    return $d;
}

$a=5;
$b=8;
$d=Diagonal($a, $b);
echo 'Диагональ прямоугольника = '.$d;

echo '<br>';
echo '<hr>';

//3
function High($x,$y) {
    if ($x>$y) {
        return $x;
    } else return $y;
}

$a=16;
$b=8;
$high=High($a,$b);
echo 'Большая сторона равна '.$high;
