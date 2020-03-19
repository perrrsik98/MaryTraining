<?php

//$result = 0;
//////echo '$result = ';
//////for ($i = 0; $i < 3; $i++) {
//////    $result = $result + 1;
//////}
//////
//////echo ' = ' . $result;
$factorial = 3;
$result = 1;

for ($i = 0; $i < $factorial; $i++) {
    $result = $result * ($i + 1);
}

echo $result;