<?php
$array = [25, -10, 7, 34, 367, -14, 2, 3];

for ($j=0; $j < count($array)-1; $j++) {
    for ($i = 0; $i < count($array)-$j-1; $i++) {
        if ($array[$i] > $array[$i + 1]) {
            $new_number = $array[$i];
            $array[$i] = $array[$i + 1];
            $array[$i + 1] = $new_number;
        }
    }
}
print_r($array);