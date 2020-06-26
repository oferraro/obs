<?php

$first_array = array("1, 3, 4, 7, 13", "1, 2, 4, 13, 15");
$second_array = array("1, 3, 9, 10, 17, 18", "1, 4, 9, 10");

function intersection($arrays) {
    $array1 = explode(', ', $arrays[0]);
    $array2 = explode(', ', $arrays[1]);
    $intersection = [];
    for ($i = 0; $i < count($array1); $i++) {
        if (in_array($array1[$i], $array2)) {
            $intersection[] = $array1[$i];
        }
    }
    return join(',', $intersection);
}

echo "First Array: " . intersection($first_array);

echo "\nFirst Array: " . intersection($second_array);