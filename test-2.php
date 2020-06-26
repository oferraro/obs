<?php

$array1 = array(1,1,2);
$array2 = array(0,0,1,1,1,2,2,3,3,4);

function removeInArray($array) {
    for ($i = 0; $i < count($array); $i++) {
        if ($i > 0 // Check we can compare with a value before of the current position
            && ((isset($array[$i - 1]) && $array[$i] == $array[$i - 1]) // Check if last value was removed or exists and equals this one
            || $array[$i] == $array[$i + 1])
        ) {
            $current = $array[$i];
            $array[] = $current;
            unset($array[$i]);
        }
    }
    return $array;
}


print_r(removeInArray($array1));
print_r(removeInArray($array2));